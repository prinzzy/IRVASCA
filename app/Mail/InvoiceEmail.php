<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvoiceEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $transaction;

    /**
     * Create a new message instance.
     *
     * @param $order
     * @param $transaction
     */
    public function __construct($order, $transaction)
    {
        $this->order = $order;
        $this->transaction = $transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Invoice from Irvasca')
            ->view('emails.invoice')
            ->with([
                'order' => $this->order,
                'transaction' => $this->transaction,
            ]);
    }
}
