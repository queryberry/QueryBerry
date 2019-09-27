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
                <form id="groups_and_pagers" class="form-signin"  action="../admin/edit_text_page_maker.php?id=' . $id_page . '" method="post" enctype="multipart/form-data" name="form_auth">
                  <h6 class="h5 mb-3 font-weight-small" style="margin-bottom:10px;">Заголовок:</h6>
                  <input type="text_header" name="text_header" class="form-control" placeholder="' . $row["text_header"] . '"required style="margin-bottom:10px;">
                  <h6 class="h5 mb-3 font-weight-small" style="margin-bottom:10px;">Превью текст:</h6>
                  <input type="header" name="header" class="form-control" placeholder="' . $row["header"] . '" required style="margin-bottom:10px;">
                  <textarea type="texta" name="texta" class="suitup-textarea" placeholder="" >' . html_entity_decode($row["text"]) . '</textarea>
                  <input class="btn btn-lg btn-primary btn-block" type="submit" name="btn_submit_register" value="сохранить" id="sub" style="margin-top:10px;"></input>
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
