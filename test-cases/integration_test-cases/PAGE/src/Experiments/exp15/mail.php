<?php
$to = "manasmodi@gmail.com";
$subject = ($_POST['senderName']);
$message = ($_POST['senderMsg']);
$message .= "\n\n---------------------------\n";
$message .= "E-mail Sent From: " . $_POST['senderName'] . " <" . $_POST['senderEmail'] . ">\n";
$headers = "From: " . $_POST['senderName'] . " <" . $_POST['senderEmail'] . ">\n";
if(@mail($to, $subject, $message, $headers))
{
echo "answer=ok";
}
else
{
echo "answer=error";
}
?>