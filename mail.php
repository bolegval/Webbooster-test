<?php
$to = "example@email.com"; 
$theme = "Заказ с сайта Webbooster"; 
$message = "Ваше имя: " . $_POST['name'] . "<br>";
$message .= "Номер телефона: " . $_POST['phone'] . "<br>"; 
$message .= "E-mail: " . $_POST['email'] . "<br>"; 
$message .= "Название товара: " . $_POST['product'] . "<br>"; 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
  
if (mail($to, $theme, $message, $headers)) {
  echo ('Успешно отправлено!');
}
else {
  echo ('Ошибка!');
}