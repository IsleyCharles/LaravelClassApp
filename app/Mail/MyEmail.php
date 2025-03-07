<?php

namespace App\Mail; // ✅ Correct namespace

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct() {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'My Email',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.MyEmail',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
