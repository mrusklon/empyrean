<?php

$frm_name  = "Youname";
$recepient = "Ksyusha.mon@gmail.com";
$sitename  = "Название Сайта";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$selectbasic = trim($_POST["selectbasic"]);
$selecTime = trim($_POST["selecTime"]);
$email = trim($_POST["email"]);
$comments = trim($_POST["comments"]);
$message = trim($_POST["message"]);
$otkuda = trim($_POST["otkuda"]);
$data = trim($_POST["data"]);

$message = "
Имя: $name <br>
Удобная дата: $data $selecTime
Удобное время для звонка: $selectbasic <br>
Телефон: $phone <br>
E-mail: $email <br>
Сообщение: $comments <br>
С какой кнопки пришла форма: $otkuda
";

mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
