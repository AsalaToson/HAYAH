<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AppointmentConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $appointment;
    public $time;
    /**
     * Create a new message instance.
     */

    public function __construct($name,$appointment,$time)
   {
        $this->name = $name;
        $this->appointment = $appointment;
       $this->time = $time;
  }
    /**
     * Get the message envelope.
     */
//    public function envelope(): Envelope
//    {
//        return new Envelope(
//            subject: 'Appointment Confirmation',
//        );
//    }

//    /**
//     * Get the message content definition.
//     */
//    public function content(): Content
//    {
//        return new Content(
//            markdown: 'emails.appointments',
//        );
//    }
//
//    /**
//     * Get the attachments for the message.
//     *
//     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
//     */
//    public function attachments(): array
//    {
//        return [];
//    }

    public function build(): AppointmentConfirmation
    {
        return $this->markdown('emails.appointments')->subject('Confirm appointment');
//        return $this->view('emails.appointments');
    }

}
