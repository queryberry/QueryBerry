<?php
if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
    echo '
    <div style="z-index: 2;position: fixed;top:80%;left:70%;"  class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
       <span aria-hidden="true">×</span>
   </button>
    '.$_SESSION["error_messages"].'
    </div>
    ';
    //Уничтожаем чтобы не выводились заново при обновлении страницы
    unset($_SESSION["error_messages"]);
}

//Если в сессии существуют радостные сообщения, то выводим их
if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
    echo '
    <div style="z-index: 2;position: fixed;top:80%;left:70%;"   class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
       <span aria-hidden="true">×</span>
   </button>
    '.$_SESSION["success_messages"].'
    </div>
    ';

    //Уничтожаем чтобы не выводились заново при обновлении страницы
    unset($_SESSION["success_messages"]);
}

if(isset($_SESSION["alert_messages"]) && !empty($_SESSION["alert_messages"])){
    echo '
    <div style="z-index: 2;position: fixed;top:80%;left:70%;"  class="alert alert-warning" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
       <span aria-hidden="true">×</span>
   </button>
    '.$_SESSION["alert_messages"].'
    </div>
    ';

    //Уничтожаем чтобы не выводились заново при обновлении страницы
    unset($_SESSION["alert_messages"]);
}
 ?>
 <script>
 $(function(){
     $('.alert').on('close.bs.alert', function(){
       $('.result').append('<li>Сейчас будет закрыто сообщение (alert)</li>');
     });
     $('.alert').on('closed.bs.alert', function(){
         $('.result').append('<li>Сообщение (alert) уже закрыто</li>');
       });
     });
 </script>
