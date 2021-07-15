<?php

// Create the Transport
$transport = (new Swift_SmtpTransport('mail.adm.tools', 465, 'ssl'))
->setUsername('mail@brych.studio')
->setPassword('****************')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
->setFrom(['mail@brych.studio' => 'brych.studio'])
->setTo(['brychmykhailo@gmail.com'])
->setBody('Проверка swiftmailer.')
;

// Send the message
$result = $mailer->send($message);
var_dump($result);