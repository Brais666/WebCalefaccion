<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Confirmacion extends Mailable
{
    use Queueable, SerializesModels;
     
    /**
     * The demo object instance.
     *
     * @var Demo
     */
    public $demo;
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($demo)
    {
        $this->demo = $demo;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('atencionalcliente@simongrup.com')
                    ->view('mails.Confirmacion')
                    ->text('mails.Confirmacion_plain')
                      ->attach(public_path('/images').'/SIMON_GRUP.png', [
                              'as' => 'SIMON_GRUP.png',
                              'mime' => 'image/png',
                      ]);
    }
}
