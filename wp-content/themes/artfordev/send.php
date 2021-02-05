<?php 
function sendMessageBot()
{
	$token='1543461661:AAFZH3Ar9mhLYcneTLJUDM_D7EMSkNB-cpo';
	$chat_id='544560661';
	 
	// Текст сообщения
	$text='Привет, мир!';
	 
	// Отправить сообщение
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL,
	       'https://api.telegram.org/bot'.$token.'/sendMessage');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
	       'chat_id='.$chat_id.'&text='.urlencode($text));
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	 
	// Настройки прокси, если это необходимо
	$proxy='111.222.222.111:8080';
	$auth='login:password';
	curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
	curl_setopt($ch, CURLOPT_PROXY, $proxy);
	curl_setopt($ch, CURLOPT_PROXYUSERPWD, $auth);
	 
	// Отправить сообщение
	$result=curl_exec($ch);
	curl_close($ch);
}
sendMessageBot();
?>