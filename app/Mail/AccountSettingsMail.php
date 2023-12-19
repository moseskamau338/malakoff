<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountSettingsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($account_deletion_form = [])
    {
        $this->details = $account_deletion_form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->from('admin@malakoff.co')
             ->cc('johnkiptum@malakoffanalytics.co.ke')
            ->subject('Account Deletion Request')
            ->view('emails.account_settings');
    }
}
