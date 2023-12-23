<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PayementMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The data to be included in the email.
     *
     * @var array
     */
    public $data;
    public $view;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data, string $view)
    {
        //
        $this->data = $data;
        $this->view = $view;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'institu inscription',
            from: new Address('info@institutmunich.com', 'Institu Munich')
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: $this->view,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
