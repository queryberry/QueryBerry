<?php
      session_start();
      require_once("dbconnect.php");
      if(isset($_SESSION["rank"]) && ($_SESSION["rank"]) ==100   ) {

      include '../template/admin.php'; ?>
          <div class="container">
            <div class="row">
          <?php

            $result = $mysqli->query("SELECT * FROM `page_text`");
            while ($row = $result->fetch_assoc()) {
                  echo '
                      <div class="col" style="margin:5px;">
                        <ul style="width:450px;" class="list-group">
                          <li class="list-group-item"><a href="http://'.$adsite.'/admin/view_text_page_in.php?id='. $row["id"] .'">'.$row["text_header"].'</a></li>
                        </ul>
                      </div>
                        ';
            }

          ?>
          </div>
        </div>
    </div>
  </body>
</html>
<?php
} else {
echo "<a href='http://".$adsite."/admin/login.php'>авторизируйтесь </a>";
}
