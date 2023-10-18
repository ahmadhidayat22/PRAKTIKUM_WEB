
<?php 
// session_reset();

session_start();


require 'server.php';
// session_destroy();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    
    $result = mysqli_query($conn, "SELECT * FROM user_account WHERE username='$username' AND `password` ='$password'");
    
    if($row = mysqli_fetch_assoc($result)){
        if ($row['user_type'] == 'admin') {
            echo "
            <script> 
    
                window.location.href = './admin/admin.php';
            </script>
            ";
        }

        else if ($username == $row['username'] && $password == $row['password']) {
            
            echo "
            <script> 
    
                window.location.href = './home.php';
            </script>
            ";
            exit();
        }  else {
            echo "
            <script>
                $('.login p').css('display','block');
            </script>
            
             ";
        };


    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signup/style.css" />
    <link href="./css/style.css?version=<?php echo filemtime('style.css'); ?>" rel="stylesheet">
    
    
    <script src="jquery.js"></script>
   
    <title>Login</title>
</head>
<body>
<div class="icon">
      <a href="index.html">
          <img src="./assets/next.png" alt="" width="80px" style="transform :rotate(180deg)">
          
      </a>
    </div>
    <div class="login">
        
        <h1>Login</h1>
        <form action="" method="POST" class="login-form" autocomplete="off" >
        <p> invalid username/password </p>
        
        <input type="text" name="username" class="text" placeholder="Username" autocomplete="off" required>

        <input type="password" name="password" class="text" placeholder="password " required>

        <button type="submit" name="submit">LOGIN</button>

        <a href="signUp.php">Don't have an account yet?</a>

        
        </form>
    </div>
    
</body>
</html>

