<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMailMessage extends Mailable
{
    use Queueable, SerializesModels;

    public string $name = "John Doe";
    public string $email = "johndoe@example.com";
    public string $thisSubject = "Test Mail";
    public string $thisMessage = "Lorem ipsum dolor sit amet euismod pretium enim risus posuere a congue congue justo mattis litora venenatis erat aenean velit";

    /**
     * Create a new message instance.
     */
    public function __construct(string $name, string $email, string $thisSubject, string $thisMessage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->thisSubject = $thisSubject;
        $this->thisMessage = $thisMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->thisSubject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.test-mail.new',
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->thisSubject,
                'thisMessage' => $this->thisMessage,
            ]
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
