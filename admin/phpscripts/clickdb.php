<?php
  function addclick($btn) {
    require_once('connect.php');
    $addQuery = "INSERT INTO tbl_clicker VALUES(NULL, '{$btn}', CURRENT_TIMESTAMP)";
    $clickAdd = mysqli_query($link, $addQuery);

    mysqli_close($link);
  }

 ?>
