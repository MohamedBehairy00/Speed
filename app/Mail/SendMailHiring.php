<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMailHiring extends Mailable
{
    use Queueable, SerializesModels;

    public $validatedData;  // Data passed to the email view
    public $cvPath;  // Path to the CV file to attach

    public function __construct($validatedData, $cvPath)
    {
        $this->validatedData = $validatedData;
        $this->cvPath = $cvPath;  // Storing the path of the CV file
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Job Application Submission',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emailHiring',  // View where email content is defined
        );
    }

    public function attachments(): array
    {
        // Check if the CV file exists and attach it
        if ($this->cvPath) {
            return [
                \Illuminate\Mail\Mailables\Attachment::fromPath($this->cvPath)
                    ->as('CV.pdf')  // Optional: Rename the file in the email
                    ->withMime('application/pdf')
            ];
        }

        return [];
    }
}
