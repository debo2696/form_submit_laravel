<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormMail extends Mailable
{
    use Queueable, SerializesModels;
    /*protected $name;
    protected $email;
    protected $desc;
    protected $file_path;*/
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $desc, $email, $file_path)
    {
        //
        $this->name = $name;
        $this->desc = $desc;
        $this->email = $email;
        $this->file_path = $file_path;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->subject('Test email from Laravel 8')->markdown('emails.welcome', [
            'name' => $this->name,
            'desc' => $this->desc,
            'email' => $this->email,
            'filePath' => $this->file_path, 
        ]);
    }
}
