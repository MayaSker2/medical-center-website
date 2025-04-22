<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class reset_password extends Mailable
{
    use Queueable, SerializesModels;

    public $email, $token;

    public function __construct($token)
    {

        $this->token = $token;
    }

    public function build()
    {
        return $this->subject('Reset Password')
                    ->view('vendor.notifications.resetPassword'); // استخدام ملف الـ Blade هنا
    }
}
