<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css?ver=5.2">
  <link rel="stylesheet" href="../css/media_style.css?ver=4">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title>Админ панель</title>
<style>
.vertical-menu {
  left: 0%;
  top: 10%;
  width: 50px;
  height: 55px;
  position: fixed;
}

.vertical-menu a {
  color: black;
  display: block;
  padding: 10px;
  text-decoration: none;
}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: gray;

}
.vertical-menu:hover .overlay {
  opacity: 1;
}
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
@media (max-width: 615px) {
  .vertical-menu {
    left: 0%;
    top: 20%;
    width: 50px;
    position: fixed;
  }

}
</style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbarcss_admin">
    <?php
    if (date( "H:i:s") > "20:00:00"){
      echo '<a class="navbar-brand" href="main.php">¯\_(ツ)_/¯</a>';
    } else {
     echo '<a class="navbar-brand" href="main.php">Админ панель</a>';
    }
    ?>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="logout.php">Выйти <span class="sr-only"></span></a>
     </li>

   </ul>
   <form name="eng" method="post" action="search.php" class="form-inline my-2 my-lg-0"> <!--  Поиск xD   -->
     <input class="form-control mr-sm-2" type="search" name="search" placeholder="Поиск" aria-label="Search">
     <input class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit"></input>
   </form>
 </div>
</nav>
  <div style="margin-left:60px;"class="my-3 p-3 bg-white rounded shadow-sm " id="media-query">
          <?php require_once("alert_block.php"); ?>
