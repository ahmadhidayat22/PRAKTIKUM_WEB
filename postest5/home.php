<?php 
session_start();

require 'server.php';

$name = $_SESSION['username'];

$result = mysqli_query($conn, "SELECT * FROM user_account WHERE username='$name'");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleHome.css">
    <link rel="shortcut icon" href="./assets/plane.png">

    <title>user page</title>
    
</head>
<body>

    <div class="container">
    <?php if($row = mysqli_fetch_assoc($result)) : ?>
    
   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?= $row["username"] ; 
      ?></span></h1>
      <p>this is an user page</p>
 
      <p>coming soon!</p>
      <a href="./profiles.php" class="btn">Profiles</a>
     
      <a href="./index.html" class="btn" name="logout" >logout</a>
      
        </div>
    <?php endif ?>
</div>
</body>
</html>

