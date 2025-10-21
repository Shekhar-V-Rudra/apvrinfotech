<?php

namespace App\Mail;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ContactSubmission $submission)
    {
    }

    public function build(): self
    {
        return $this->subject('New Contact Form Submission')
            ->view('emails.contact_submission_notification', [
                'submission' => $this->submission,
            ]);
    }
}
