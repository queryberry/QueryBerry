<?php
session_start();
require_once("dbconnect.php");

$id_group = $_GET['id'];

$_SESSION["error_messages"] = '';

$_SESSION["success_messages"] = '';

$_SESSION["alert_messages"] = '';

if(isset($_POST["btn_submit_register"]) &&  !empty($_POST["btn_submit_register"])){


$result = $mysqli->query("DELETE FROM `page_text`  WHERE `id` = '$id_group' ");
header("Location: http://".$adsite."/admin/delete_text_page.php");

if ($result == true) {
    $_SESSION["alert_messages"].= "<p class='mesage_error'>Информация занесена в базу данных ." ;
    sleep(1);
    header("Location: http://".$adsite."/admin/delete_text_page.php");

} else {
    $_SESSION["alert_messages"].= "<p class='mesage_error'>Информация не занесена в базу данных .  ";
    sleep(1);
    header("Location: http://".$adsite."/admin/delete_text_page.php");
}

$mysqli->close();



}else{

exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
}

 ?>
