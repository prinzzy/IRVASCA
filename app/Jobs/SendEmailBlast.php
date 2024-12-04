<?php

namespace App\Jobs;

use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailBlast;
use App\Models\EmailBlastLog;
use Illuminate\Support\Facades\Log;
use App\Mail\CustomHtmlEmail;

class SendEmailBlast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, Batchable;

    protected $emailBlastId;
    protected $recipientEmail;

    public function __construct($emailBlastId, $recipientEmail)
    {
        $this->emailBlastId = $emailBlastId;
        $this->recipientEmail = $recipientEmail;
    }

    public function handle()
    {
        // Retrieve the email blast from the database
        $emailBlast = EmailBlast::find($this->emailBlastId);

        if (!$emailBlast) {
            Log::error("Email blast with ID {$this->emailBlastId} not found.");
            return;
        }

        // Log the attempt to send the email
        $logEntry = EmailBlastLog::create([
            'email_blast_id' => $this->emailBlastId,
            'email' => $this->recipientEmail,
            'status' => 'attempt',
        ]);

        try {
            // Create the mailable using the email blast content
            $email = new CustomHtmlEmail($emailBlast->subject, $emailBlast->content);

            // Send the email using the mailable class
            Mail::to($this->recipientEmail)->send($email);

            // Log success in the EmailBlastLog table
            $logEntry->update(['status' => 'success']);

            // Log success in Laravel logs
            Log::info("Successfully sent email to {$this->recipientEmail}");
        } catch (\Exception $e) {
            // Log failure in the EmailBlastLog table
            $logEntry->update([
                'status' => 'failed',
                'error_message' => $e->getMessage(),
            ]);

            // Log failure in Laravel logs
            Log::error("Failed to send email to {$this->recipientEmail}: {$e->getMessage()}");
        }
    }
}
