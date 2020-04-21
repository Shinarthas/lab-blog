<?php

// Отправитель
$sender = 'contacts@thunderrise.com';

// Получатель
$recipient = 'ceofdi2016@gmail.com';

// Headers
$headers = 'From: ' . $sender . "\r\n" .
    'Reply-To: ' . $sender . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    'MIME-Version: 1.0' . "\r\n" .
    'Content-type: text/html; charset=utf-8';

// Post
$name = htmlspecialchars($_POST['name']);
$mail = htmlspecialchars($_POST['mail']);
$details = htmlspecialchars($_POST['details']);
$budget = htmlspecialchars($_POST['budget']);
$files = $_POST['files'];

if ($mail == '') die();

// Заголовок
$title = 'TR Contacts';

// Сообщение
$message = 'Письмо с контактной формы ThunderRise.' . "<br>\n" . "<br>\n" .
    'Имя: ' . $name . "<br>\n" .
    'Почта: ' . $mail . "<br>\n" .
    'Бюджет: ' . $budget . "<br>\n" . "<br>\n" .
    'Детали:' . "<br>\n" .
    $details . "<br>\n" . $files;

// Отправка
mail($recipient, $title, $message, $headers);
mail('tbc@ua.fm', $title, $message, $headers);

file_put_contents("../mail/".time().".txt", $message);

echo true;
exit();
