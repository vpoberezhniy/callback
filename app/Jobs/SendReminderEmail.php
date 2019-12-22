<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use  Illuminate\Support\Facades\Mail;

class SendReminderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->message = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        info($this->message);
        Mail::send(['text' => 'mail.mail'], ['name', 'Web Dev Blog'], function ($message)
        {
            $message->to('laratest.testlara@gmail.com', 'Laravel')->subject('You have a new ticket');
            $message->from('laratest.testlara@gmail.com', 'Laravel');
        }
        );
    }
}
