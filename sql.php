<?php

  $name = $_POST["name"];

  $email = $_POST["email"];

  $text = $_POST["text"];

  $server = "95.161.152.122";
  $username = "root";
  $password = "googlCraft123";
  $database = "queryberry";

  $mysqli = new mysqli($server, $username, $password, $database);

  $mysqli->set_charset('utf8');

    $mysqli->query("INSERT INTO `applications`(`name`, `email`, `text`) VALUES ('$name','$email','$text')");

 header("Location: https://queryberry.site");
?>
