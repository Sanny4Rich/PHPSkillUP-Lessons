<?php

namespace App\Service;


class Mailer
{

    public function send($to)
    {
        echo 'Отправка письма на' . $to;

        $transport = (new \Swift_SmtpTransport('smtp.ethereal.email', 587, 'tls'))
            ->setUsername('grbdhvqm7redhuve@ethereal.email')
            ->setPassword('nyskxPWRjCf9ZFuFjw');

        // Create the Mailer using your created Transport
        $mailer = new \Swift_Mailer($transport);

        // Create a message
        $message = (new \Swift_Message('Wonderful Subject'))
            ->setFrom(['john@doe.com' => 'John Doe'])
            ->setTo(['sanny4rich@gmail.com', $to => 'A name'])
            ->setBody('Сообщение от PHP')
        ;

        // Send the message
        $result = $mailer->send($message);
    }



}