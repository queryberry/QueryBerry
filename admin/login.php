<link href="../css/signin.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div id="spiner" class="spinner-grow mx-auto" style=" width: 7rem; height: 7rem;" role="status">
<span class="sr-only">Loading...</span>
</div>
<?php
  require_once("dbconnect.php");
  session_start();
  if (!isset($_SESSION["login"]) && !isset($_SESSION["password"])) {

      ?>
      <body class="text-center">
        <form class="form-signin"  action="auth.php" method="post" name="form_auth">
          <h1 class="h3 mb-3 font-weight-normal">QueryBerry</h1>
          <h3 class="h3 mb-3 font-weight-normal">Админ Панель</h3>
          <label for="inputEmail" class="sr-only">Логин</label>
          <input type="login" name="login" required="required" id="inp" class="form-control" placeholder="Логин" required autofocus>
          <label for="inputPassword" class="sr-only">Пароль</label>
          <input type="password" name="password" class="form-control" placeholder="Пароль" required>
          <input class="btn btn-lg btn-primary btn-block"type="submit" name="btn_submit_auth" value="Войти" id="sub" ></input>
        </form>

        <?php require_once("../template/alert_block.php"); ?>

        <script>
          $("#spiner").css("display", "none");
          $("#sub").onclick = function(){
            $("#spiner").css("display", "block");
            $(".form-signin").css("display", "none");
          };
        </script>
        <?php

  } else {

    ?>
      <script>
      setTimeout(function(){
        window.location.replace("http://<?=$adsite?>/admin/main.php");
      }, 2000);

      </script>
    <?php
  }
 ?>
