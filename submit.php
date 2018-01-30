<?php
session_start();
$data = array(
	'success' => true,
	'message' => 'Ваша заявка успешно отправлена!',
);

$email 		= $_POST['user_email'] 		? strip_tags($_POST['user_email']) : '';
$modelId 		= $_POST['model'] 		? strip_tags($_POST['model']) : '';
$message	= $_POST['order_body']	? strip_tags($_POST['order_body']) : '';
$captcha	= $_POST['captcha']	? $_POST['captcha'] : '';

$models = array('DOKO CZUR ET16','DOKO BS16');
$model = isset($models[$modelId-1]) ? $models[$modelId-1] : '';

if (!$email) {
	$data = array(
		'success' => false,
		'message' => 'Необходимо указать почтовый ящик',
	);
} else if(!$_SESSION['captcha'] || !$_SESSION['captcha'] || ($_SESSION['captcha']['code'] != $captcha)) {
	$data = array(
		'success' => false,
		'message' => 'Пожалуйста, введите корректный код ',
	);
} else {
	$body = '<html><body>';
	$body .= '<h1>Заявка на сайте Book-scanner.ru!</h1>';
	$body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	if ($email)
		$body .= "<tr><td><strong>e-mail:</strong> </td><td>" . htmlentities($email) . "</td></tr>";
	if ($model)
		$body .= "<tr><td><strong>модель сканера:</strong> </td><td>" . htmlentities($model) . "</td></tr>";
	if ($message)
		$body .= "<tr><td><strong>сообщение:</strong> </td><td>" . htmlentities($message) . "</td></tr>";
	$body .= "</table>";
	$body .= '</body></html>';

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= 'From: <info@doc-cam.ru>' . "\r\n";

	if (!mail (
		'info@doc-cam.ru, ilya.ryahin@gmail.com',
		'Book-scanner.ru: Заяка на DOKO',
		$body,
		$headers
	)) {
		$data = array(
			'success' => false,
			'message' => 'Не удалось отправить заявку. Пожалуйста, попробуйте позднее',
		);
	}
}
header('Content-Type: application/json');
echo json_encode($data);