<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="QueryBerry - разработка сайтов">
  <meta name="Keywords" content="queryberry, queryberry.ru, html, css, js, php, сайтов, САЙТОВ, под ключ, разработка, разработка под ключ, разработка сайтов под ключ, низкие цены, быстро, разработка сайта под ключ php, cms, CMS, bitrix, BIRTIX, быстрая разработка сайта под ключ, дешевая разработка сайта под ключ">  <meta name="description" content="QueryBerry - разработка сайтов">
  <title>QueryBerry</title>
  <link rel="stylesheet" href="css/bootstrap.min.css?ver=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/master.css?ver=3">
  <link rel="stylesheet" href="css/mediaQueries.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Open+Sans|Open+Sans+Condensed:300|Pacifico|Rubik+Mono+One&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="/icon/favicon.ico" type="image/x-icon">
  <!-- Yandex.Metrika counter -->
  <meta name="yandex-verification" content="5e5dc09da7a533b2" />
  <script type="text/javascript" >
     (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
     m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
     (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

     ym(55478731, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
     });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/55478731" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Wow для анимации при прокрутке страницы -->
<script src="js/wow.min.js"></script>
<script>new WOW().init();</script>
<script src="js/parallax.min.js"></script>

</head>
<body>
  <header class="header" id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <a class="navbar-brand logo animated heartBeat" href="#"><img style="width:200px;" class="logo" src="img/logo.png" alt=""></a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav menu">

      <li class="menu__item nav-item wow zoomIn">
        <a class="nav-link" href="index.html">Главная<span class="sr-only">(current)</span></a>
      </li>

      <li class="menu__item nav-item wow zoomIn" data-wow-delay="0.2s">
        <a class="nav-link" href="index.html#about">О нас</a>
      </li>

      <li class="menu__item nav-item wow zoomIn" data-wow-delay="0.4s">
        <a class="nav-link" href="index.html#design">Дизайн</a>
      </li>

      <li class="menu__item nav-item wow zoomIn" data-wow-delay="0.6s">
        <a class="nav-link" href="index.html#price">Услуги</a>
      </li>

      <li class="menu__item nav-item wow zoomIn" data-wow-delay="0.8s">
        <a class="nav-link" href="index.html#team">Наша команда</a>
      </li>

      <li class="menu__item nav-item wow zoomIn" data-wow-delay="1s">
        <a class="nav-link" href="index.html#connect">Свяжитесь с нами</a>
      </li>

      <li class="menu__item nav-item wow zoomIn" data-wow-delay="1s">
        <a class="nav-link" href="blog.php">Блог</a>
      </li>

    </ul>
      </div>
    </nav>
    <div class="parallax-window blog__headerwrap " data-parallax="scroll" data-image-src="img/blog_background.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main">
              <h1 class="main__title wow zoomIn">
                Добро пожаловать в наш блог
              </h1>
              <p class="main__text wow zoomIn" data-wow-delay="0.4s">
                В этом разделе вы можете подробно узнать о наших проектах, о новых технологиях, которые мы внидряем в наши проекты и в пирнципе ближе познакомиться с нами на нашими трудами.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
      <section class="blogList">
  <?php
        require_once("./admin/dbconnect.php");

        $result = $mysqli->query("SELECT * FROM `page_text`");
          while ($row = $result->fetch_assoc() ) {
            echo '
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="post">
                  <h2 class="post__title"><a href="#" class="post__link">' . $row["text_header"] . '</a></h2>
                  <span class="post__date">' . $row["date"] . '</span>
                  <p class="post__text">
                    ' .  mb_strimwidth($row["header"], 0, 30, "...") . '
                    <span class="post__text__readMore"><a href="blog_read_more.php?id=' . $row["id"] . '" class="post__text__readMore__link">Читать далее</a></span>
                  </p>
                </div>
              </div>
            </div>
            ';
        }
?>
        </section>
</body>
</html>
