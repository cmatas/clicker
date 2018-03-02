<?php
  function addclick($btn) {
    require_once('connect.php');
    $addQuery = "INSERT INTO tbl_clicker VALUES(NULL, '{$btn}', CURRENT_TIMESTAMP)";
    $showclickQ = "SELECT COUNT(*) AS total FROM tbl_clicker WHERE click_button= '{$btn}'";
    $clickAdd = mysqli_query($link, $addQuery);
    $showclick = mysqli_query($link, $showclickQ);

    $superclick = mysqli_fetch_array($showclick);

    return $superclick[0];
    // echo $showclick;

    mysqli_close($link);
  }

  // function showclicks() {
  //   require_once('connect.php');
  //   $buttonClicked = $btn;
  //   $showclickQ = "SELECT count(*) AS total FROM tbl_clicker WHERE click_button= '{$btn}'";
  //   $showclick = mysqli_query($link, $showclickQ);
  //
  //   return $showclick;
  //
  // }

 ?>
