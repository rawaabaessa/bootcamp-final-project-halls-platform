<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reason;
    public $path;

    /**
     * Create a new message instance.
     */
    public function __construct($reason)
    {
        $this->reason = $reason;
        // $this->path = public_path('assets/images/Blue & Red Overlapping House Realtor Logo (1).png');

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $logoPath = public_path('assets/images/Blue & Red Overlapping House Realtor Logo (1).png');
        // $logoData = file_get_contents($logoPath);
        // $logo = $this->embedData($logoData, 'logo.png', 'image/png');

        return $this->subject('رد الاستفسار')
            ->view('emails.MessageMail');
            // ->attachData($logoData, 'logo.png', ['mime' => 'image/png'])
            // ->with('logo', $logo);
    }
}
