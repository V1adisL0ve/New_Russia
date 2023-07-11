<?php
  if($_POST['num'] == 1){
    $num = 'Один';
  } else if($_POST['num'] == 2){
    $num = 'От двух до шести';
  } else if($_POST['num'] == 3){
    $num = 'Шесть и более';
  } else {
    $num = 'Один';
  }

  $to = "Vlad-danilov-2017@list.ru";
  $from = trim($_POST['email']);
  $name = trim($_POST['name']);
  $message = htmlspecialchars($_POST['massage'] );
  $message = urldecode($massage);
  $message = trim($massage);

  $headers = "From: $from" . "\r\n" .
  "Reply-to: $from" . "\r\n" .
  "Name: $name" . "\r\n" .
  "X-Mailer : PHP/" . phpversion();

  if(mail($to, $num, $message, $headers)){
    echo "Письмо отправленно";
  } else {
    echo "Письмо отправленно";
  }
 ?>
