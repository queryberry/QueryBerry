<?php
    //Запускаем сессию
    session_start();

    //Добавляем файл подключения к БД
    require_once("dbconnect.php");

    //Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
    $_SESSION["error_messages"] = '';

    //Объявляем ячейку для добавления успешных сообщений
    $_SESSION["success_messages"] = '';


    /*
        Проверяем была ли отправлена форма, то есть была ли нажата кнопка Войти. Если да, то идём дальше, если нет, значит пользователь зашел на эту страницу напрямую. В этом случае выводим ему сообщение об ошибке.
    */
    if(isset($_POST["btn_submit_auth"]) && !empty($_POST["btn_submit_auth"])){


             //(2) Место для обработки почтового адреса

            //Обрезаем пробелы с начала и с конца строки
            $login = trim($_POST["login"]);
            if(isset($_POST["login"])){

                if(!empty($login)){
                    $login = htmlspecialchars($login, ENT_QUOTES);


            }else{
                // Сохраняем в сессию сообщение об ошибке.
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле для ввода login</p>";

                //Возвращаем пользователя на страницу авторизации
                header("HTTP/1.1 301 Moved Permanently");
              header("Location: http://".$adsite."/admin/login.php");

                //Останавливаем скрипт
                exit();
            }

             //(3) Место для обработки пароля
            if(isset($_POST["password"])){

                //Обрезаем пробелы с начала и с конца строки
                $password = trim($_POST["password"]);

                if(!empty($password)){
                    $password = htmlspecialchars($password, ENT_QUOTES);

                    //Шифруем пароль
                    $password = md5($password."top_secret");
                }else{
                    // Сохраняем в сессию сообщение об ошибке.
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите Ваш пароль</p>";

                    //Возвращаем пользователя на страницу регистрации
                    header("HTTP/1.1 301 Moved Permanently");
                  header("Location: http://".$adsite."/admin/login.php");

                    //Останавливаем скрипт
                    exit();
                }

            }else{
                // Сохраняем в сессию сообщение об ошибке.
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле для ввода пароля</p>";

                //Возвращаем пользователя на страницу регистрации
                header("HTTP/1.1 301 Moved Permanently");
              header("Location: http://".$adsite."/admin/login.php");

                //Останавливаем скрипт
                exit();
            }


            // (4) Место для составления запроса к БД
            //Запрос в БД на выборке пользователя.
            $result_query_select = $mysqli->query("SELECT * FROM `admin` WHERE login = '".$login."' AND password = '".$password."'");

            if(!$result_query_select){
                // Сохраняем в сессию сообщение об ошибке.
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка запроса на выборке пользователя из БД</p>";

                //Возвращаем пользователя на страницу регистрации
                header("HTTP/1.1 301 Moved Permanently");
              header("Location: http://".$adsite."/admin/login.php");

                //Останавливаем скрипт
                exit();
            }else{

                //Проверяем, если в базе нет пользователя с такими данными, то выводим сообщение об ошибке
                if($result_query_select->num_rows == 1){

                  $resulton = $mysqli->query("SELECT `rank` FROM `admin` WHERE login = '".$login."' ");

                  if($resulton->num_rows > 0){
                        while($row = $resulton->fetch_assoc()) {
                            $_SESSION['rank'] =  $row['rank'];
                        }
                      } else {
                          echo "0 results";
                      }


                    // Если введенные данные совпадают с данными из базы, то сохраняем логин и пароль в массив сессий.
                    $_SESSION['login'] = $login;
                    $_SESSION['password'] = $password;
                    //Возвращаем пользователя на главную страницу
                    header("HTTP/1.1 301 Moved Permanently");
                  header("Location: http://".$adsite."/admin/login.php");

                }else{

                    // Сохраняем в сессию сообщение об ошибке.
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Неправильный логин и/или пароль</p>";

                    //Возвращаем пользователя на страницу регистрации
                    header("HTTP/1.1 301 Moved Permanently");
                  header("Location: http://".$adsite."/admin/login.php");

                    //Останавливаем скрипт
                    exit();
                }
            }

        }else{
            //Если капча не передана
            exit("<p><strong>Ошибка!</strong> Отсутствует проверочный код, то есть код капчи. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
        }

    }else{
        exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
    }
