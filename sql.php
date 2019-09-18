<?php

  require_once("dbconnect.php");

  $name = $_POST["name"];

  $email = $_POST["email"];

  $text = $_POST["text"];

  $result = $mysqli->query("INSERT INTO `applications`(`name`, `email`, `text`) VALUES ('$name','$email','$text')");

 //header("Location: https://queryberry.site");
?>
