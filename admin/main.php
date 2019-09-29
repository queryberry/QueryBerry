<?php
      session_start();
      require_once("dbconnect.php");
      if(isset($_SESSION["rank"]) && ($_SESSION["rank"]) ==100   ) {

      include '../template/admin.php'; ?>

  <div class="container d-flex justify-content-center">
    <div class="row">
      <div class="col">
        <ul style="width:250px;" class="list-group">
          <!-- ✓ _  ✗ -->
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="add_text_page.php">Добавить запись</a></li>
          <br>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="delete_text_page.php">Удалить Запись</a></li>
          <br>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="edit_text_page.php">Изменить Запись</a></li>
          <br>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="view_text_page.php">Все записи</a></li>
        </ul>
      </div>
  </div>
</div>
</body>
</html>
<?php
} else {
 echo "<a href='http://".$adsite."/admin/login.php'>авторизируйтесь </a>";
}
?>
