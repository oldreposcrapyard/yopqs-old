<?php

/**
* PHP Contact Form
* By Jordan Hatch - http://www.jordanh.net/
*
* Copyright (C) 2010 Jordan Hatch
**/

// You can edit this file completely without worrying about breaking anything.
// See the descriptions above each option for details on what it does. This is also covered in the documentation.
// Making a backup of this file is recommended before you begin editing.

// Set the email address which the form should be sent to.
$config['address']		=	'marcin@safmb.cba.pl';

// Set the subject below to control the subject header sent with the email
// You can use variables set by the form by encasing them with double-square brackets.
$config['subject']		=	"Message from [[name]]: [[subject]]";

// Sets the content to be used in the email. 
// You can reference any variables which have been sent by the form by encasing them with double-square brackets.
// Default variables which can be used are:
//	[[name]]
//	[[email]]
//	[[subject]]
//	[[content]]
$config['body']			=	"[[name]] ([[email]]) has sent you a message with the subject [[subject]]: \n\n\"[[content]]\"";

// You can turn on the raw output by setting the variable below to TRUE.
// This will append all the sent data to the end of your email.
// Useful if you have lots of fields but don't want to add them all to the body.
$config['raw']			=	FALSE;

// Set this value to TRUE if you would like a copy of the email to be returned to the sender.
$config['sender_copy']	=	FALSE;

// Set the email address to display messages from when sending a copy out to the sender.
$config['sender_email'] = "mailer@ttg.webuda.com";

// Set the content and subject to be used in the copy emailed to the sender of the message.
// Only used if 'sender_copy' is set to TRUE.
// You can reference any variables which have been sent by the form by encasing them with double-square brackets.
$config['sender_subject'] = "Thanks for your message";
$config['sender_body']	=	"Hi [[name]],\n\nThank you for sending me a message. I will reply to your email as soon as possible.\n\nThanks";

// Set the location of the success page when the form has been sent.
// Leave blank to use the built-in notifications on the form, configurable below.
$config['success_page'] = 	'';

// Set the success message used on the form if there is no success page configured.
$config['success_message']	= 'Email wys³any';


// Configure the fields to check for on the form with the array below.
// You must add the fields to the form manually too.
// Refer to the documentation for details on what these options do.
$config['fields'] = array();

$config['fields']['name'] 	= array(
								"required"	=>	true,
							);
$config['fields']['email']	= array(
								"required"	=>	true,
								"type"		=>	'email',
							);
$config['fields']['subject'] = array(
								"required"	=>	true,
							);
$config['fields']['content'] = array(
								"required"	=>	true,
							);
							
// You can add custom fields to your form here.

// Example:
// $config['fields']['phone'] = array( 'type' => 'number' );


// You can choose to use a CAPTCHA for spam prevention.
// To enable it, set the following option to TRUE.
$config['use_captcha']	=	TRUE;

// Path to the CAPTCHA image file relative to your contact form.
$config['captcha_path'] =	"includes/captcha.php";

// Path to the CAPTCHA base image relative to the captcha file.
$config['captcha_base'] =	"assets/captcha.png";

// If the CAPTCHA is disabled, you can choose to use a human verification question.
// This is a random simple maths question which can partially distinguish between bots and humans.
$config['use_check']	=	TRUE;



// ============================
// ERROR MESSAGES
// ============================

$config['error_invalid_email'] = "Podaj poprawny email."; // used if a field fails an email validation
$config['error_invalid_number'] = "B&#322;&#261;d."; // used if a field fails a number validation
$config['error_invalid_length'] = "Pole nieprawid³owej d³ugoœci"; // used if a field fails a length validation

$config['error_missing_field'] = "Wype³nij wszystkie pola."; // used if a required field is blank

// custom error messages can be defined for fields to overwrite the defaults
// the fieldname must be inside the key
// eg 'error_field_email' or 'error_field_name'

$config['error_field_name'] = "Wprowadz imie.";
$config['error_field_email'] = "Wprowadz email.";
$config['error_field_subject'] = "Wprowadz temat.";
$config['error_field_content'] = "Wprowadz treœæ.";

/** END OF CONFIG FILE **/