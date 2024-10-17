<?php

// app/Mail/OtpMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name')) // Specify sender
            ->subject('Your OTP Code')
            ->view('emails.otp')
            ->with(['otp' => $this->otp]);
    }
}
