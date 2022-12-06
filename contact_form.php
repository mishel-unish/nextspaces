<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$email = new PHPMailer(TRUE);

if($_POST) {
	$client_name = "";
	$client_email = "";
	$client_phone = "";
	$email_title = "Message from client";
	// $recipient = "mail@nextspaces.net";
	$recipient = "mishel.unish@gmail.com";
	$client_msg = "";
	$email_body = "<div>";
	$sender = "web.msg@nextspaces.net";
	$senderName = 'Nextspaces Web';
	$host = 'mail.nextspaces.net';
	$password = '32P@sSke3Yu556Wd102';
	$port = 587;
	$security = 'tls';

	if(isset($_POST['client_name'])) {
		$client_name = filter_var($_POST['client_name'], FILTER_SANITIZE_STRING);
		$email_body .= "<div>
								<label><b>Client Name:</b></label>&nbsp;<span>".$client_name."</span>
							</div>";
	}

	if(isset($_POST['client_email'])) {
		$client_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['client_email']);
		$client_email = filter_var($client_email, FILTER_VALIDATE_EMAIL);
		$email_body .= "<div>
								<label><b>Client's Email:</b></label>&nbsp;<span>".$client_email."</span>
							</div>";
	}

	if(isset($_POST['client_phone'])) {
		$client_phone = filter_var($_POST['client_phone'], FILTER_SANITIZE_STRING);
		$email_body .= "<div>
								<label><b>Client's Phone:</b></label>&nbsp;<span>".$client_phone."</span>
							</div>";
	}

	if(isset($_POST['client_msg'])) {
		$client_msg = htmlspecialchars($_POST['client_msg']);
		$email_body .= "<div>
								<label><b>Client's Message:</b></label>
								<div>".$client_msg."</div>
							</div>";
	}

	$email_body .= "</div>";

	try {

		$email->setFrom($sender, $senderName);
		$email->addAddress($recipient);
		$email->Subject = $email_title;
		$email->Body = $email_body;

		$email->isSMTP();
		$email->isHTML(true);
		$email->Host = $host;
		$email->SMTPAuth = TRUE;
		$email->Username = $sender;
		$email->Password = $password;
		$email->SMTPSecure = $security;
		$email->Port = $port;
		$email->send();
		$msg = "Thank you for contacting us mr./ms. " .$client_name. ". You will hear from us soon.";
		$type = "form-success";
	}
	catch (Exception $e)
	{
		$msg = "Something went wrong1. We are sorry for the inconvenience. Please try again.";
		$type = "form-error";
	}

} 	else {
	$msg = "Something went wrong2. We are sorry for the inconvenience. Please try again.";
	$type = "form-error";
}

$data = array($msg, $type, $email);
// $data = array($msg, $type, $client_name, $client_email, $client_phone, $client_msg);

echo json_encode($data);
?>
