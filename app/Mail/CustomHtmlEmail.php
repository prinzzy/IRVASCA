<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomHtmlEmail extends Mailable
{
    use SerializesModels;

    public $subject;
    public $htmlContent;

    /**
     * Create a new message instance.
     *
     * @param string $subject
     * @param string $htmlContent
     */
    public function __construct($subject, $htmlContent)
    {
        $this->subject = $subject;
        $this->htmlContent = $htmlContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject) // Set the email subject
            ->html($this->htmlContent) // Pass the decoded HTML content
            ->withSwiftMessage(function ($message) {
                // Explicitly set Content-Type to text/html
                $message->getHeaders()->addTextHeader('Content-Type', 'text/html');
            });
    }
}
