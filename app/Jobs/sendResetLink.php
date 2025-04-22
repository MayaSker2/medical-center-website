<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\reset_password;

class sendResetLink implements ShouldQueue
{
    use Queueable;
    public $userEmail,$token;
    /**
     * Create a new job instance.
     */
    public function __construct($userEmail,$token)
    {
        $this->userEmail = $userEmail;
        $this->token=$token;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->userEmail)
        ->send(new reset_password($this->token));

    }
}
