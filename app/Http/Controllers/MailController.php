<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
      public function send()
      {
        Mail::send(['text' => 'mail.mail'], ['name', 'Web Dev Blog'], function ($message)
        {
            $message->to('laratest.testlara@gmail.com', 'Laravel')->subject('You have a new ticket');
            $message->from('laratest.testlara@gmail.com', 'Laravel');
        }
        );
      }
}
