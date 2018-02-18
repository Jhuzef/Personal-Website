<?php

$to = "josephgonzales034@gmail.com";  // Your email address will be here
if (!isset($_POST[name]) || empty($_POST[name]))
{
echo "You didn't fill in the name field!";
exit;
}
else
{
$name = $_POST[name];
}
 if (empty($_POST["subject"])) {
    echo "You didn't fill in the subject field!";
    exit;
  } else {
 
    $subject = $_POST[subject];
  }

 if (empty($_POST["email"])) {
    echo "You didn't fill in the e-mail field!";
    exit;
  } else {
    // check if e-mail address is well-formed
    $email = $_POST[email];
  }
if (!isset($_POST[message]) || empty($_POST[message]))
{
echo "You didn't fill in the message field!";
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
echo"E-mail Sent";
}
else
{
echo"E-mail failed. Heroku does not allow the use of the php mailer function. E-mail me directly, and I apologize for the inconvenience";

} 

?>