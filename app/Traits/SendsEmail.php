<?php

namespace App\Traits;

use Illuminate\Support\Facades\Mail;

trait SendsEmail
{
    /**
     * Send an email.
     *
     * @param  string  $to
     * @param  string  $subject
     * @param  string  $view
     * @param  array   $data
     * @return void
     */
    public function sendEmail($to, $subject, $view, $data = [])
    {
        Mail::send($view, $data, function ($message) use ($to, $subject) {
            $message->to($to)
                    ->subject($subject);
        });
    }
}
