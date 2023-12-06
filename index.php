<?php
$to = 'asma.sultan.dds@gmail.com';

$subject = 'You are Hacked!';

$message = 'Hello! Asma Sultan, Youre account is hacked!';

$senderEmail = 'google.com'
$senderName = 'Google'

$headers = 'From: ' . $senderEmail . ' <' . $senderEmail . '>' . "\r\n" . 'Reply-To: ' . $senderEmail . "\r\n" . 'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent Successfully!';
} else{
    echo 'Failed!'
}
?>
