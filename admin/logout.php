<?php
    include "dbconnect.php";

      session_start();

      unset($_SESSION["login"]);
      unset($_SESSION["password"]);
      unset($_SESSION["rank"]);

      header("HTTP/1.1 301 Moved Permanently");
      header("Location: http://".$adsite."/admin/login.php");

  ?>
