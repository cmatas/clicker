<?php
  require_once('admin/phpscripts/config.php');

  if(isset($_POST['btnpressed'])) {
    $btn = $_POST['btnpress'];
      $result = addclick($btn);
  }
    // echo '<br/>' . "* The item has been added to your cart.";
    // echo $btn;
  // echo $btn;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/click.css">
  <title>Document</title>
</head>
<body>
  <div class="main">

    <h3>Click Counter</h3>
    <form class="" action="click.php" method="post">
      <input type="hidden" name="btnpress" value="btn1">
      <button type="submit" name="btnpressed" value="btn1" id="button1">I am button 1:<br> 0</button>
    </form>
    <form class="" action="click.php" method="post">
      <input type="hidden" name="btnpress" value="btn2">
      <button type="submit" name="btnpressed" value="btn2" id="button2">You are button 2:<br> 0</button>
    </form>
    <form class="" action="click.php" method="post">
      <input type="hidden" name="btnpress" value="btn3">
      <button type="submit" name="btnpressed" value="btn3" id="button3">They is button 3:<br> 0</button>
    </form>

  </div>
  <script src="js/click.js"></script>
</body>
</html>
