<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_ledc";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tbl_clicker (click_button)
VALUES ('button1')";

if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($link);
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
      <input type="submit" name="button1" id="button1">I am button 1:<br> 0</input>
      <input type="submit" name="button2" id="button2">You are button 2:<br> 0</input>
      <input type="submit" name="button3" id="button3">They is button 3:<br> 0</input>
    </form>

  </div>
  <script src="js/click.js"></script>
</body>
</html>
