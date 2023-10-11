<?php 
session_start();

    if(isset($_POST['logout'])){
        echo "
        <script> 
        alert('logout');
        </script>
        
        ";

    }
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

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['fullname']; 
      ?></span></h1>
      <p>this is an user page</p>
 
      <p>coming soon!</p>
      <a href="./profiles.php" class="btn">Profiles</a>
     
      <a href="./index.html" class="btn" name="logout" >logout</a>
      
   </div>

</div>
</body>
</html>

