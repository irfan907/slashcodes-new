<?php

namespace App\Mail;

use App\Calculatedquote;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CalculatedQuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    private Calculatedquote $quote;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Calculatedquote $quote)
    {
        $this->quote=$quote;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('hello@cynosuredesigns.co.uk')
        ->subject('Cost Calculator Form | Cynosure Designs')
        ->markdown('emails.calculated-quote-mail',['quote'=>$this->quote]);
    }
}
