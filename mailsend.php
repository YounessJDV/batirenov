<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

if (isset($_POST['email'])) {

	$mail = $_POST['mail'];
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];
	
	require 'src/Exception.php';
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';

	$mail = new PHPMailer();

	$mail->From     = $_POST['mail'];
	$mail->FromName = $_POST['nom'];
	$mail->addAddress("jounidovyouness@gmail.com", "Youness JOUNIDOV");
	$mail->Subject  = $_POST['objet'];
	$mail->isHTML(true);
	$mail->Body     = $_POST['message'];
	$mail->AltBody = $_POST['message'];

	if($mail->send()) {

		echo "Email envoyé!";
		exit;
	} 
	else {
		echo "Error: " . $mail->ErrorInfo;
	}   

}
?>