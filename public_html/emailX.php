<?php
$receiver='nuwan_tissera@yahoo.com';
$title = "Mail From Website ---dsandco.lk";



$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

mail($receiver,$title,$message);

//$content ='$message';
/*
			$headers ='From : ' .$name .
	 	'Reply-To: ' . $email .
    		'X-Mailer: PHP/' . phpversion();
*/

/*
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$success="Your Message Was Succesfully Send To Dayananda&Samarawicrama Company...They Will Contact You";


if (mail($receiver,$title,$message,$headers))
{
    //echo "<script type='text/javascript'>alert('$success');</script>";
       print $success;
print "
        <br>To Go Back , Press <button> <a href=\"javascript:history.back();\">back</a></button> ";
}
else
{
    print "Your message is not sent.
        <br>Please go <a href=\"javascript:history.back();\">back</a> and send again.";
}

*/

?>