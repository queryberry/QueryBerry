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

      <section class="item-category-area section-gap">
        <div class="container">
      <?php

              $result = $mysqli->query("SELECT * FROM `page_text` WHERE `id` = $id_page");
                while ($row = $result->fetch_assoc() ) {
                  echo '<h4 class="border-bottom border-gray pb-2 mb-0" style="color:black;">  ' . $row["text_header"] .  '</h4>';
                  echo '<div class="container" style="margin-top:10px;">';
                  echo '<div class="row">';
                  echo '<div class="col">';
                  echo ' <p style="color:black;"> ' . html_entity_decode($row["text"]) . ' </p> ';
                 }
           ?>
         </div>
         </div>
      </div>
      </div>
      </section>
</div>
</body>
</html>
<?php
} else {
echo "<a href='http://".$adsite."/admin/login.php'>авторизируйтесь </a>";
}
