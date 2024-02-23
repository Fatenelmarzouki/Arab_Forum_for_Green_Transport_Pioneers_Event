<?php

namespace App\Mail;

use App\Models\Sponser;
use Faker\Provider\ar_EG\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address as MailablesAddress;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SponserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $sponer_id;
    private $sponer;
    private $sponer_email;
    public function __construct($sponer_id,$sponer_email)
    {
        $this->sponer_id=$sponer_id;
        $this->sponer_email=$sponer_email;
    }

    // public function build(){
    //     $this->sponer = Sponser::find($this->sponer_id);
    //     // $toEmail = putenv("MAIL_FROM_ADDRESS=$this->sponer->email ");
    //     // return $this->from($toEmail)
    //     // ->subject('Hi this new Sponser')
    //     // ->view('mailsponer')->with([
    //     //     'sponer'=>$this->sponer,
    //     // ]);
    // }
    
    //try four
    public function build(){
        $this->sponer = Sponser::find($this->sponer_id);
        
        return $this->from(env('MAIL_FROM_ADDRESS', $this->sponer_email),$this->sponer->email)->subject('شخص اخر قام بالتسجيل')
        ->view('mailsponer')->with([
            'sponer'=>$this->sponer,
        ]);
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     $this->sponer = Sponser::find($this->sponer_id);
    //     return new Envelope(
    //         from: new MailablesAddress($this->sponer->email, 'Sender Name'),
    //         subject: 'Hello World'
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {

    //     return new Content(
    //         // view: view('mailsponer')->with(['sponer'=>$this->sponer,])
    //         // view: view('emails.hello')->with('name', 'John')->with('age', 25)
    //         view: "mailsponer",
    //         with: [
    //           "sponer"=>  $this->sponer
    //         ]

    //     );
    //     // return view('mailsponer')->with('sponer', $this->sponer);


    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
