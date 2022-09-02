<?php
 $to = "sa@nd-t.ru";
 $fio = trim($_POST['name']);
 $from = trim($_POST['email']);
 $telefon = trim($_POST['phone']);
//  $textSend = trim($_POST['text']);

 $message = htmlspecialchars($_POST['text']);
 $message = urldecode($message);
 $message = trim($message);

 if(mail($to, $message)) {
    echo 'Письмо отправленно';
 }  else {
    echo 'Письмо не отправленно';
 }
?>