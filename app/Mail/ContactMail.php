<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Sichikawa\LaravelSendgridDriver\SendGrid;


class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    
    use SendGrid;//これ大事
    protected $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
     
   
    
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('reita.nakatani@gmail.com')
        ->subject('受付完了のご連絡')
        ->view('contacts.mail')
        ->with(['contact' => $this->contact]);
        
        
    }
}
