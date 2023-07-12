<?php

namespace App\Mail;

use App\Quote;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GetQuoteFormMail extends Mailable
{
    use Queueable, SerializesModels;
    private Quote $quote;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Quote $quote)
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
            ->subject('Get Quote Form | Cynosure Designs')
            ->markdown('emails.get-quote-form',['quote'=>$this->quote]);
    }
}
