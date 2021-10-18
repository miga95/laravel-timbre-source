<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $address;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'roumet@docaret.com';
        $subject = 'This is a demo!';
        $name = 'Roumet';

        return $this->view('mail')
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with([ 'data' => $this->data['message'] ]);
    }
}
