<?php
      session_start();
      require_once("dbconnect.php");
      if(isset($_SESSION["rank"]) && ($_SESSION["rank"]) ==100   ) {

      include '../template/admin.php';
      $id_page = $_GET["id"];
?>
      <style>@import url(../css/suitup.css); </style>
      <script src="../js/suitup.jquery.min.js"></script>
      <script src="../js/extended-commands.suitup.jquery.js"></script>
      <script>
      $( function(){
      	$('.suitup-textarea')
      		.suitUp()
      });
      </script>

          <?php
            $result = $mysqli->query("SELECT * FROM `page_text` WHERE id = '$id_page'");
              while ($row = $result->fetch_assoc() ) {
              echo '
                <form id="groups_and_pagers" class="form-signin"  action="../admin/delete_text_page_maker.php?id=' . $id_page . '" method="post" enctype="multipart/form-data" name="form_auth">
                  <input class="btn btn-lg btn-primary btn-block" type="submit" name="btn_submit_register" value="удалить" id="sub" style="margin-top:10px;"></input>
                </form>
                ';
              }
          ?>
    </div>
  </body>
</html>
<?php
} else {
echo "<a href='http://".$adsite."/admin/login.php'>авторизируйтесь </a>";
}
