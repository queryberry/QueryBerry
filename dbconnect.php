<?php

    $server = "95.161.152.122";
    $username = "root";
    $password = "googlCraft123";
    $database = "queryberry";

    $mysqli = new mysqli($server, $username, $password, $database);


    if (mysqli_connect_errno()) {
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit();
    }

    $mysqli->set_charset('utf8');

?>
