<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/4/2014
 * Time: 10:45 AM
 */

namespace App\Mailers;


use Illuminate\Support\Facades\Mail;

abstract class Mailer {

    /**
     * @param $to
     * @param $subject
     * @param $view
     * @param array $data
     * @param null $from
     * @internal param null $from
     */
    public function send($to, $subject, $view, $data = [], $from)
    {
        Mail::queue($view, $data, /**
             * @param $message
             */
        function ($message) use ($to, $subject, $from)
        {
            $message->to($to)->subject($subject);
            
            $message->from($from['address'], $from['name']);

        });
    }
}