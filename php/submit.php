<?php
 include ("../../config.php"); 
$your_email="$email_contact";

if(!empty($_POST))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	$to      = $your_email;
	$subject = "Mensagem - $page_title";
	$headers = 'Email: '.$name.' <'.$email.'>' . "\r\n";
	$message = 'Nome: '.$name."\r\n"."\r\n".'Mensagem:'."\r\n".$message;
	
	mail($to, $subject, $message, $headers);
}

?>
