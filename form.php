<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
	$to = $_POST["email"];
	$name = $_POST["name"];
	$gender = $_POST["gender"];
	$subject = "Contact Us ";
	$body = "<p>".$_POST["message"]."</p>";
	
	$headers  = "From: Developer <lemiszewski@gmx.com>" . "\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	mail($to, $subject, $body, $headers);
	// <!-- include file Connection File -->
	include 'insert.php'; 
 
	
}
?>

