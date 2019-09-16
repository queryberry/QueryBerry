<?php

  $name = $_POST["name"];

  $email = $_POST["email"];

  $text = $_POST["text"];
  
  $to      = 'marktamarov2001@gmail.com';
  $subject = 'Запрос';
  $message = 'имя:' . $name . ' , адресс:' . $email . ' , текст:' . $text .'';
  mail($to, $subject, $message);


 //header("Location: https://queryberry.github.io/QueryBerry/");
?>
