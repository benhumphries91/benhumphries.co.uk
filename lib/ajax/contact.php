<?php
// constants for generic settings accross the website
define('PHP_ROOT', dirname(getcwd()));

require_once(PHP_ROOT.'/inc/constants.php');
require_once(PHP_ROOT.'/inc/functions.php');

$vars = array(
    'error' => NULL, /* message to display to user on error */
    'success' => NULL, /* message to display to user on success */
    'console' => NULL,  /* debug information as array */
    'redirect' => NULL, /* fully qualified or partial url */
    'response' => array()   /* vars to be passed back to ajax call */
);

$post = (object) $_POST;

$params = array(
	'fullname' => filter_var($post->fullname['value'], FILTER_SANITIZE_STRING),
	'email' => filter_var($post->email['value'], FILTER_VALIDATE_EMAIL),
	'phone' => filter_var($post->phone['value'], FILTER_SANITIZE_STRING),
	'message' => filter_var($post->message['value'], FILTER_SANITIZE_STRING)
);

$i = 0;

if ($params['fullname'] == false) {
	$vars['error'][$i] = array(
		"message" => "Please Check First Name",
		"selector" => $post->fullname['selector']
	);
	$i++;
}

if ($params['email'] == false) {
	$vars['error'][$i] = array(
		"message" => "Invalid E-mail Address",
		"selector" => $post->email['selector']
	);
	$i++;
}

if ($params['message'] == false) {
	$vars['error'][$i] = array(
		"message" => "Please Enter a Message",
		"selector" => $post->message['selector']
	);
	$i++;
}

if (count($vars['error']) > 0 ) {
	echo json_encode($vars);
	die();
}

$vars['success'] = array(
	"title" => "Thank You",
	"message" => "Your message was sent successfully."
	);

$contact_date = date('Y-m-d H:i:s');

// no errors and success message has been created send an email to sales team
if ($vars['success'] != NULL && count($vars['error']) < 1) {
	$subject = ucfirst($params['fullname']) .' Sent a Message';
	$message = "Full Name: $params[fullname] <br /><br />
		Email: $params[email]<br /><br />
		Phone: $params[phone]<br /><br />
		Message: $params[message]<br />
		Sent on: $contact_date";

	// send email
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: ".SITE_NAME." <".GEN_EMAIL.">\r\n";

	mail(GEN_EMAIL, $subject, $message, $headers);

}

echo json_encode($vars);