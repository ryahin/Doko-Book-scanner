<?php
session_start();
include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha(array(
    'characters' => 'ABCDEFGHJKLMNPRSTUVWXYZ23456789',
));
echo json_encode(array(
	'src' => $_SESSION['captcha']['image_src']
));