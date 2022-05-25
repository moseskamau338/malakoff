<?php

namespace App\Mail;

use App\Models\DemoRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoRequestAdminMail extends Mailable
{
    use Queueable, SerializesModels;
    public object $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(DemoRequest $demoRequest)
    {
        $this->details = $demoRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Demo Request Incoming!')
            ->view('emails.demoadmin');
    }
}
