<?php
//if "email" variable is filled out, send email
  if (isset($_POST['email']))  {
  
  //Email information
  $admin_email = "cryptoknights@mailinator.com";
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $comment = $_POST['message'] . "\nMessage sent by: " . $_POST['name'] . "at the email: " . $email;
  echo $admin_email;
  echo $email;
  //send email
  mail($admin_email, $subject, $comment);
  
  //Email response
  echo "E-mail successful, I will get back to you as soon as possible.";
  }
else {
	echo "E-mail failed.";
}

?>