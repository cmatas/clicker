<?php
  function logIn($username, $password, $ip) {
    require_once('connect.php');
    $username = mysqli_real_escape_string($link, $username);
    $password = mysqli_real_escape_string($link, $password);
    $loginstring = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
    // echo $loginstring;
    $user_set = mysqli_query($link, $loginstring);
    // echo mysqli_num_rows();
    if(mysqli_num_rows($user_set)){
      $founduser = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
      $id = $founduser['user_id'];
      // echo $id;
      $_SESSION['user_id'] = $id;
      $_SESSION['user_name'] = $founduser['user_fname'];
      if(mysqli_query($link, $loginstring)){
        $update = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}";
        $updatequery = mysqli_query($link, $update);
      }
      redirect_to("admin_index.php");
    }else{
      $message = "Learn how to type mens";
      return $message;

      // if(mysqli_num_rows($checkLockout) == 1)
      //    {
      //        // Check if they're locked out
      //        $checkLockout = mysql_query("SELECT * FROM tbl_user
      //                                     WHERE user_name = $username
      //                                     AND user_date >= 3
      //                                     AND last_failed_login > DATE_SUB(NOW(), INTERVAL 10 MINUTE)" or die (mysql_error());
      //        if (mysqli_num_rows($checkLockout) > 0) {
      //            echo "Locked out!";
      //        } else {
      //            $row = mysql_fetch_array($checkloginEmp);
      //            $_SESSION['Username'] = $userID;
      //            $_SESSION['FName'] = $row['FName'];
      //            $_SESSION['SName'] = $row['SName'];
      //            $_SESSION['LoggedIn'] = 1;
      //        }
      //
      //        echo "guat";
      //    }
      //
    }

    mysqli_close($link);
  }

 ?>
