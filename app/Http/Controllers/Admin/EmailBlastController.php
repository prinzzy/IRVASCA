<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailBlast;
use App\Jobs\SendEmailBlast;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Bus;
use App\Models\EmailBlastLog;
use App\Mail\CustomHtmlEmail;
use Illuminate\Support\Facades\Mail;

class EmailBlastController extends Controller
{
    /**
     * Display the Email Blast Management Page.
     */
    public function index()
    {
        // Retrieve email blasts in descending order by creation date
        $emailBlasts = EmailBlast::orderBy('created_at', 'desc')->get();
        return view('admin.emailBlast.index', compact('emailBlasts'));
    }

    /**
     * Create a new Email Blast and queue the emails for sending.
     */
    public function create(Request $request)
    {
        // Validate input
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        try {
            // Store the new email blast in the database
            $emailBlast = EmailBlast::create([
                'subject' => $request->subject,
                'content' => $request->content,
            ]);

            // Enqueue the emails for sending in the background
            $this->enqueueEmails($emailBlast->id);

            // Return a success response immediately to the browser
            return redirect()->route('admin.emailBlast.index')->with('success', 'Email blast created and queued successfully.');
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Email Blast Creation Failed: ' . $e->getMessage());
            return redirect()->route('admin.emailBlast.index')->with('error', 'Failed to create and queue email blast. Please try again.');
        }
    }


    /**
     * Enqueue emails for sending in batches.
     *
     * @param int $emailBlastId
     */
    private function enqueueEmails(int $emailBlastId)
    {
        // Define the batch size for processing emails
        $batchSize = 500;

        // Fetch email recipients from the 'emails' table in chunks
        DB::table('emails')
            ->select('email')
            ->orderBy('id') // Add an explicit orderBy clause here
            ->chunk($batchSize, function ($emails) use ($emailBlastId) {
                $jobs = [];

                // Prepare jobs for each recipient
                foreach ($emails as $recipient) {
                    $jobs[] = new SendEmailBlast($emailBlastId, $recipient->email);
                }

                // Log to check if jobs are being prepared
                Log::info('Dispatching jobs for email blast ID ' . $emailBlastId);

                // Dispatch all jobs in a batch
                if (!empty($jobs)) {
                    Bus::batch($jobs)
                        ->onQueue('email_blasts') // Specify the queue for the batch
                        ->dispatch();

                    Log::info('Jobs dispatched for email blast ID ' . $emailBlastId);
                }
            });
    }



    public function getLogs($emailBlastId)
    {
        // Fetch the logs for the specified Email Blast
        $logs = EmailBlastLog::where('email_blast_id', $emailBlastId)
            ->orderBy('created_at', 'desc')
            ->get();

        // Return logs as JSON response
        return response()->json(['logs' => $logs]);
    }


    public function testEmailBlast(Request $request)
    {
        // Validate the incoming data from the form
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',  // Make sure this is a raw HTML string
            'test_email' => 'nullable|email',  // Optional: Validate email
        ]);

        // Get the subject and content from the form
        $subject = $request->subject;
        $content = $request->content;  // This will contain the raw HTML

        // Define the test email address
        $testEmail = $request->input('test_email', 'vinastyivan@gmail.com'); // Allow override or use default

        try {
            // Store the new email blast in the database
            $emailBlast = EmailBlast::create([
                'subject' => $subject,
                'content' => $content,
            ]);

            // Enqueue the email to the test email address
            $this->enqueueTestEmail($emailBlast->id, $testEmail, $subject, $content);

            return redirect()->route('admin.emailBlast.index')->with('success', 'Test email blast created and queued successfully.');
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Test Email Blast Failed: ' . $e->getMessage());
            return redirect()->route('admin.emailBlast.index')->with('error', 'Failed to create and queue test email blast. Please try again.');
        }
    }


    public function enqueueTestEmail(int $emailBlastId, string $testEmail, string $subject, string $content)
    {
        try {
            // Decode the HTML entities in the content
            $decodedContent = html_entity_decode($content);

            // Log the decoded content to check
            Log::info('Decoded email content: ' . $decodedContent);

            // Send the email using the CustomHtmlEmail Mailable with decoded HTML content
            Mail::to($testEmail)->send(new CustomHtmlEmail($subject, $decodedContent));

            return redirect()->route('admin.emailBlast.index')
                ->with('success', 'Test email sent successfully!');
        } catch (\Exception $e) {
            return redirect()->route('admin.emailBlast.index')
                ->with('error', 'Failed to send test email: ' . $e->getMessage());
        }
    }
}
