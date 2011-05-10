<?php

/**
* PHP Contact Form
* By Jordan Hatch - http://www.jordanh.net/
*
* Copyright (C) 2010 Jordan Hatch
**/

session_start();
//error_reporting(E_ALL);

require('config.php');

if ( !empty($_SESSION['contact_temp_captcha']) ) {
	$hash = $_SESSION['contact_temp_captcha'];
	unset($_SESSION['contact_temp_captcha']);
	
	// generate image
	$captcha = imagecreatefrompng($config['captcha_base']);
	
	// allocate colours
	$black = imagecolorallocate($captcha, 0, 0, 0);
	$blue = imagecolorallocate($captcha, 0, 75, 117);
	
	$num_lines = mt_rand(2,4);
	for ($i = 1; $i <= $num_lines; $i++) {
		imageline($captcha,mt_rand(0,93),0,mt_rand(20,73),80,$black); 
	}
	
	$hash = str_split($hash);
	$num_letter = 1;
	foreach ( $hash as $letter ) {
		imagestring($captcha, mt_rand(5,7), 10+(12*$num_letter), 6+mt_rand(0,8), $letter, $blue); 
		$num_letter++;
	}
	
	header("Content-type: image/png"); 
	imagepng($captcha);
	
} else {
	die('No string to display.');
}

?>