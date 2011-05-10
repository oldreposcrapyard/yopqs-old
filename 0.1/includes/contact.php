<?php

/**
* PHP Contact Form
* By Jordan Hatch - http://www.jordanh.net/
*
* Copyright (C) 2010 Jordan Hatch
**/

session_start();

// define security constant
define("contact_form", true);

// define paths to includes
define("config_file", "config.php");
define("form_file", "form.php");

class Contact_Form {
	
	private $config;
	private $errors = array();
	private $data = array();
	private $success;
	
	public function __construct() {
		// load configuration
		require( config_file );
		$this->config = $config;
	
		if (isset($_POST['submit'])) {
			$this->processForm();
		}
	}
	
	public function displayForm() {
		// show the form file
		require( form_file );
	}
	
	private function generateHash() {
		// generate the single-time security hash
		$hash = sha1(uniqid() * time() * mt_rand());
		$hash = substr($hash, 0, 12);
		// store the unencrypted hash in the session variable
		$_SESSION['contact_hash'] = $hash;
		// now encrypt it to use in the form
		$form_hash = sha1($hash);
		echo "<input type='hidden' name='hash' value='".$form_hash."' />";
	}
	
	private function checkHash($hash) {
		if ( !empty($hash) && !empty($_SESSION['contact_hash']) ) {
			if ( sha1($_SESSION['contact_hash']) == $hash ) {
				return true;
			}
		} else {
			return false;
		}
	}
	
	private function getCaptcha() {
		if ( $this->config['use_captcha'] == TRUE ) {

			$hash = substr(sha1(mt_rand() * microtime()),0,5);

			$_SESSION['contact_temp_captcha'] = $hash;
			$_SESSION['contact_captcha'] = sha1($hash);
			
			
			
			echo "<img src=\"". $this->config['captcha_path'] ."\" alt=\"Verification image\" class=\"captcha\" />";
		} else if ( $this->config['use_check'] == TRUE ) {
			// add two numbers
			$num1 = mt_rand(1,6);
			$num2 = mt_rand(1,6);
			$_SESSION['contact_check'] = "{$num1}+{$num2}";
			
			echo "{$num1} + {$num2} = ";
		} else {
			// no verification
			return false;
		}
	}
	
	private function checkCaptcha($captcha) {
		if ( $this->config['use_captcha'] == TRUE ) {
			if ( $_SESSION['contact_captcha'] == sha1($captcha) ) {
				return true;
			} else {
				return false;
			}
		} else if ( $this->config['use_check'] == TRUE ) {
			// human verification check
			$sum = $_SESSION['contact_check'];
			if ( empty($sum) ) {
				return false;
			}
			$parts = explode("+", $sum);
			if ( $parts[0]+$parts[1] == $captcha ) {
				return true;
			} else {
				return false;
			}
		} else {
			// no verification needd
			return true;
		}
	}
	
	private function checkEmail($email) {
		if ( preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i', $email) ) {
			return true;
		} else {
			return false;
		}
	}
	
	private function addError($error) {
		$this->errors[] = $error;
		return true;
	}
	
	public function hasErrors() {
		if ( count($this->errors) > 0 ) {
			return true;
		} else {
			return false;
		}
	}
	
	private function getErrors() {
		sort($this->errors);
		return $this->errors;
	}
	
	public function displayErrors($before = '', $after = '') {
		if ( $this->hasErrors() ) {
			$errors = $this->getErrors();
			foreach ($errors as $error) {
				echo $before . $error . $after;
			}
		} else {
			return false;
		}
	}
	
	public function processForm() {
		
		$hash = '';
		$captcha = '';
		
		// get security hash and CAPTCHA and then check them 
		if (!empty($_POST['hash'])) {
			$hash = $_POST['hash'];
		}		
		if ( !empty($_POST['captcha'])) {
			$captcha = $_POST['captcha'];
		}
		
		if ( $this->checkHash($hash) ) {
			// check captcha
			if ( $this->checkCaptcha($captcha) ) {
				$secure = true;
			} else {
				$this->addError("The verification code was incorrect.");
			}
		} else {
			$this->addError('Your session has expired. Please try again.');
		}
		
		// now check for the values
		$fields = $this->config['fields'];
		$data = array(); // this will hold our values
		
		// loop through the fields which have been defined in the config file
		foreach ( $fields as $field_name => $field_settings ) {
			if (!empty($_POST[$field_name])) {
				$data[$field_name] = $_POST[$field_name];
			
				if ( isset($field_settings['type']) ) {
					// if a specific type of content has been defined
					
					if ($field_settings['type'] == "email") {
						if ( !$this->checkEmail($data[$field_name]) ) {
							if ( !empty($this->config['error_field_'. $field_name]) ) {
								$this->addError($this->config['error_field_'. $field_name]);
							} else {
								$this->addError( $this->config['error_invalid_email'] );
							}
						}
					} else if ( $field_settings['type'] == "number" ) {
						if ( !is_numeric($data[$field_name]) ) {
							if ( !empty($this->config['error_field_'. $field_name]) ) {
								$this->addError($this->config['error_field_'. $field_name]);
							} else {
								$this->addError( $this->config['error_invalid_number'] );
							}
						}
					}
					
				}
				
				if ( isset($field_settings['length']) ) {
					if ( strlen($data[$field_name]) !== $field_settings['length']) {
						if ( !empty($this->config['error_field_'. $field_name]) ) {
							$this->addError($this->config['error_field_'. $field_name]);
						} else {
							$this->addError( $this->config['error_invalid_length'] );
						}
					}
				}
				
			} else {
				if ( isset($field_settings['required']) && $field_settings['required'] == true ) {
					// support customised error messages for required fields
					if ( !empty($this->config['error_field_'. $field_name]) ) {
						$this->addError($this->config['error_field_'. $field_name]);
					} else {
						$this->addError($this->config['error_missing_field']);
					}
				}
			}
		}
		
		// store the data as a class variable so it can be accessed by the form functions
		$this->data = $data;
		
		// now based on whether we authenticated correctly, the script will either return the errors or will send the email
		if ( !$this->hasErrors() ) {
		
			$this->sendEmail();
			
			if ( !empty($this->config['success_page']) ) {
				header("Location: {$this->config['success_page']}");
			} else {
				$this->success = true;
			}
			
		}
		
		// when the form is displayed, errors will be shown
		
	}
	
	private function sendEmail() {
		
		$recipient = $this->config['address'];
		
		// now replace the double square-bracket-enclosed variables with the real thing.
		$body = $this->config['body'];
		$subject = $this->config['subject'];
		$from = $this->data['email'];
		
		$sender_body = '';
		$sender_subject = '';
		if ( $this->config['sender_copy'] == true ) {
			$sender_body = $this->config['sender_body'];
			$sender_subject = $this->config['sender_subject'];
		}
		
		foreach ( $this->data as $name => $value ) {
			$body = str_replace("[[{$name}]]", $value, $body);
			$subject = str_replace("[[{$name}]]", $value, $subject);
			$sender_body = str_replace("[[{$name}]]", $value, $sender_body);
			$sender_subject = str_replace("[[{$name}]]", $value, $sender_subject);
		}
		
		if ( $this->config['raw'] == TRUE ) {
			$body .= "\n\nFields submitted:\n";
			foreach( $this->data as $name => $value ) {
				$body .= "{$name}: {$value}\n";
			}
		}
		
		$headers = "From: {$from}\r\nReply-To: {$from}\r\n";
		@mail( $recipient, $subject, $body, $headers );
		
		if ( $this->config['sender_copy'] == true ) {
			$sender_from = $this->config['sender_email'];
			$sender_headers = "From: {$sender_from}\r\n";
			@mail( $from, $sender_subject, $sender_body, $sender_headers );
		}
		
		return true;
		
	}
	
	// used in forms to retrieve value
	public function value($field) {
		if ( !empty($this->data[$field]) ) {
			echo $this->data[$field];
		} else {
			return false;
		}
	}
	
	public function success() {
		if (!empty($this->success)) {
			return true;
		}
		return false;
	}
	
	public function getSuccess() {
		if ($this->success()) {
			echo $this->config['success_message'];
		} else {
			return false;
		}
	}
	
}

$form = new Contact_Form();

/*** END OF FILE ***/