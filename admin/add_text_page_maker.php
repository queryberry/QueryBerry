<?php
session_start();
require_once("dbconnect.php");

$_SESSION["error_messages"] = '';

$_SESSION["success_messages"] = '';

$_SESSION["alert_messages"] = '';


if(isset($_POST["btn_submit_register"]) && !empty($_POST["btn_submit_register"])){

  //
  if(isset($_POST["text_header"])){

      $text_header = trim($_POST["text_header"]);

      if(!empty($text_header)){

          $text_header = htmlspecialchars($text_header, ENT_QUOTES);
}else{
  // Сохраняем в сессию сообщение об ошибке.
  $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле для ввода Текста</p>";
  header("Location: http://".$adsite."/admin/add_text_page.php");

  exit();
      }
}
//
if(isset($_POST["header"])){

    $header = trim($_POST["header"]);

    if(!empty($header)){

        $header = htmlspecialchars($header, ENT_QUOTES);
}else{
// Сохраняем в сессию сообщение об ошибке.
$_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле для ввода Текста</p>";
header("Location: http://".$adsite."/admin/add_text_page.php");

exit();
    }
}
//
  if(isset($_POST["texta"])){

      $texta = trim($_POST["texta"]);

      if(!empty($texta)){

          $texta = htmlspecialchars($texta, ENT_QUOTES);
}else{
  // Сохраняем в сессию сообщение об ошибке.
  $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле для ввода Текста</p>";
  header("Location: http://".$adsite."/admin/add_text_page.php");

  exit();
      }
}


$date = date("d.m.y");
//
$result = $mysqli->query("INSERT INTO `page_text`(`text_header`,`header`, `text`, `date`) VALUES ('$text_header', '$header', '$texta', '$date') ");
header("Location: http://".$adsite."/admin/add_text_page.php");

if ($result == true) {
    $_SESSION["alert_messages"].= "<p class='mesage_error'>Информация занесена в базу данных ." ;
    sleep(1);
    header("Location: http://".$adsite."/admin/add_text_page.php");

} else {
    $_SESSION["alert_messages"].= "<p class='mesage_error'>Информация не занесена в базу данных .  ";
    sleep(1);
    header("Location: http://".$adsite."/admin/add_text_page.php");
}
$mysqli->close();



}else{

exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
}

 ?>
