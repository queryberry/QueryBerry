<?php
      session_start();
      require_once("dbconnect.php");
      if(isset($_SESSION["rank"]) && ($_SESSION["rank"]) ==100   ) {

      include '../template/admin.php'; ?>
      <style>@import url(../css/suitup.css); </style>
      <script src="../js/suitup.jquery.min.js"></script>
      <script src="../js/extended-commands.suitup.jquery.js"></script>
      <script>
      $( function(){
      	$('.suitup-textarea')
      		.suitUp()
      });
      </script>

          <form id="groups_and_pagers" class="form-signin"  action="../admin/add_text_page_maker.php" method="post" enctype="multipart/form-data" name="form_auth">
            <h6 class="h5 mb-3 font-weight-small" style="margin-bottom:10px;">Заголовок:</h6>
            <input type="text_header" name="text_header" class="form-control" placeholder="" required style="margin-bottom:10px;">
            <textarea type="texta" name="texta" class="suitup-textarea" ></textarea>
            <input class="btn btn-lg btn-primary btn-block" type="submit" name="btn_submit_register" value="сохранить" id="sub" style="margin-top:10px;"></input>
          </form>

    </div>
  </body>
</html>
<?php
} else {
echo "<a href='http://".$adsite."/admin/login.php'>авторизируйтесь </a>";
}
