<?php
require '../vendor/autoload.php';

$transport = (new Swift_SmtpTransport('mail.adm.tools', 465, 'ssl'))
->setUsername('mail@brych.studio')
->setPassword('****************')
;

$mail = new Swift_Mailer($transport);

$message = (new Swift_Message('Wonderful Subject'))
->setFrom(['mail@brych.studio' => 'brych.studio'])
->setTo(['brychmykhailo@gmail.com'])
->setBody('Проверка swiftmailer.')
;

$result = $mail->send($message);
