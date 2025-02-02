<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationRejectMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reason;
    public $info;

    /**
     * Create a new message instance.
     */
    public function __construct($reason,$info)
    {
        $this->reason = $reason;
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('رفض الحجز')
            ->view('emails.reservationreject');
    }
}
