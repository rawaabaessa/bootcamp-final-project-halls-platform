<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $info;
    public function __construct($info)
    {
        $this->info = $info;
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'تاكيد الحجز',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'emails.ReservationMail',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }
    public function build()
    {
        // $logoPath = public_path('assets/images/Blue & Red Overlapping House Realtor Logo (1).png');
        // $logoData = file_get_contents($logoPath);
        // $logo = $this->embedData($logoData, 'logo.png', 'image/png');

        return $this->subject('تأكيد الحجز')
            ->view('emails.ReservationMail');
            // ->attachData($logoData, 'logo.png', ['mime' => 'image/png'])
            // ->with('logo', $logo);
    }
}
