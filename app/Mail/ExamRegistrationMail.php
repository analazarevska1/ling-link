<?php

namespace App\Mail;

use App\Models\ExamRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExamRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ExamRegistration $registration) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Нова пријава за испит: ' . $this->registration->exam->title,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.exam-registration',
        );
    }
}