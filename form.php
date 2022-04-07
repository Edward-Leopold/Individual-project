<?php
	// функция очистки приходящей строки
	function clearStr($data){
		return urldecode(htmlspecialchars(trim(strip_tags($data)))); 
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// прием данных 
		$name = clearStr($_POST["name"]);
		$email = clearStr($_POST["email"]);
		$msg = clearStr($_POST["msg"]);

		// подготовка данных для отпарвки по почте
		$to  = "=?utf-8?b?sodaniil4489@gmail.com?=";
		$subject = "=?utf-8?b?Сообщение с сайта?=";
		// str_replace("\n.", "\n..", $text)
		$sender = "=?utf-8?B?" . base64_encode($name) . "?= <" . $email . ">";
		$msg = "=?utf-8?B?" . base64_encode($msg) . "?=";

		// функция отправки сообщения на электронную почту
		mail($to, $subject, $msg, 'From: ' . $sender);
		
		// переадресация обратно на страницу формы
		header("Location: index.php#contacts");
		exit;
	}
 ?>