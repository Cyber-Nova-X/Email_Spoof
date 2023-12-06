<?php
$to = 'reciepent@gmail.com';

$subject = 'Test Email';

$message = 'Just a mesage';

$senderEmail = 'joedon.ex.com'
$senderName = 'Joe Bidon'

$headers = 'From: ' . $senderEmail . ' <' . $senderEmail . '>' . "\r\n" . 'Reply-To: ' . $senderEmail . "\r\n" . 'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent Successfully!';
} else{
    echo 'Failed!'
}
?>