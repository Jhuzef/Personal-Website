<?php

/*
$to = "josephgonzales034@gmail.com";  // Your email address will be here
if (!isset($_POST[name]) || empty($_POST[name]))
{
echo "You didn't fill in the NAME field!";
exit;
}
else
{
$name = $_POST[name];
}
$subject = $_POST[subject];
 if (empty($_POST["email"])) {
    echo "You didn't fill in the FROM field!";
    exit;
  } else {
    // check if e-mail address is well-formed
    $email = $_POST[email];
  }
if (!isset($_POST[message]) || empty($_POST[message]))
{
echo "You didn't fill in the MESSAGE field!";
exit;
}
else
{
$message = $_POST[message];
}
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n"; 
$headers .= "From: " . $email . " <" . $email . ">" . "\r\n";
if (mail($to, $subject, $message, $headers))
{
echo"<p>Email Sent !!!</p>\n";
}
else
{
echo"<p>Error!</p>\n";
echo"<p>The mail() function failed.</p>";
} */

require 'vendor/autoload.php';
$sendgrid = new SendGrid("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");
$email    = new SendGrid\Email();

$email->addTo($_POST[email])
      ->setFrom("josephgonzales034@gmail.com")
      ->setSubject($_POST[message] . "\nFrom: " . $_POST[name])
      ->setHtml($_POST[subject]);

$sendgrid->send($email);



?>