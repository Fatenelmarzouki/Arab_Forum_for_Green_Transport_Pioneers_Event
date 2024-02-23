<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Message;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    private $user_id;
    private $user;
    public function __construct($user_id)
    {
        $this->user_id=$user_id;
    }

    
    public function build(){
        $this->user = User::find($this->user_id);
        // $from ="arabfourmforgreentransportlead@gmail.com";
        return $this->from(env('MAIL_FROM_ADDRESS', "arabfourmforgreentransportlead@gmail.com"),"دعوة حضور ملتقى النقل الأخضر")->subject("الكود الخاص بك")
        ->view('mail')->with([
            'user'=>$this->user
        ]);

        // return $this// Set the sender address // Set the recipient address
        // ->subject('Welcome to Laravel') // Set the subject line
        // ->view('mail')->with([
        //     'user'=>$this->user,
        // ]);

        // ->attach(storage_path('app/public/UsersQrCodes/'.$this->user->qr_code));
        // return $this->subject("Here is your image")
        // ->markdown("mail")

    }
    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'User Mail',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
