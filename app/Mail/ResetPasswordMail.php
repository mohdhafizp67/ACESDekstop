<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $user;
     public $token;

     public function __construct($user, $token)
     {
         //
         $this->user = $user;
         $this->token = $token;
     }

     /**
      * Build the message.
      *
      * @return $this
      */
     public function build()
     {
       // dd($this->user);
       $token = $this->token;
       $user = $this->user;

       // return $this->to($this->user->email , $this->user->name)
       // return $this->from(env('MAIL_FROM_ADDRESS'))
       return $this->from('devartaniscloud@gmail.com', 'ACES System Email')
               ->subject('Reset Password')
               ->view('mail.reset-password', compact('token', 'user'));
     }
}
