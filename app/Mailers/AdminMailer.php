<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/4/2014
 * Time: 10:46 AM
 */

namespace App\Mailers;


class AdminMailer extends Mailer {

    /**
     * @param $message
     * @param $sender
     * @param null $from
     */
    public function contactMessage($text, $sender, $phone, $from = NULL)
    {
        $to = 'ryan@absolutesport.co.za';
        $view = 'emails.admin.contact';
        $subject = 'Absolutesport site message';
        $data = compact('text', 'sender', 'phone');
        if( ! $from)
        {
            $from = ['address' => 'ryan@absolutesport.co.za', 'name' => 'Absolute Sport'];
        }

        return $this->send($to, $subject, $view, $data, $from);
    }
}