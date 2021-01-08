<?php
// multiple recipients
$to  = 'kgkchandana@yahoo.com' . ', '; // note the comma
$to .= 'nuwan_tissera@yahoo.com';

$name=$_POST['name'];
$email=$_POST['email'];
$msgTyped=$_POST['message'];




// subject
$subject = 'Message From A Website Visitor DSANDCO.LK';

// message
$message = '
<html>
<head>
  <title>Message From A Website Visitor DSANDCO.LK</title>
</head>
<body>
  <p>Contact This User For  </p>
	<h1>Name : '.$name.' </h1>
	<h1>Email :'.$email.' </h1>
	<h1>Phone : '.$phone.' </h1>
	<h1>Message : '.$msgTyped.' </h1>

</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: nuwan_tissera@yahoo.com' . "\r\n";
$headers .= 'From: Visitor DSANDCO.LK' . "\r\n";
$headers .= 'Cc: dsandco@sltnet.lk' . "\r\n";
$headers .= 'Bcc: kgkchandana@yahoo.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
?>