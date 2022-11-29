<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class ResetearPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $password;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //\Log::info($this->password);
        return $this->subject('Solicitud de reestablecimiento de contraseña')
        ->markdown('emails.ResetearPassword');
    }
}
