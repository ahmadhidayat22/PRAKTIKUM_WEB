
<?php
// session_set_cookie_params(10800); // Mengatur waktu kedaluwarsa sesi menjadi 3 jam
session_start();

require 'server.php';



// if($_POST['password'] == $_POST['cpassword']){
    
    
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
if ( isset($_POST['submit']) ){
        $fullname = $_POST['fullName'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $noHp = $_POST['number'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO user_account (id, fullname, username, email, no_hp, `password`,user_type) VALUES ('', '$fullname', '$username', '$email', '$noHp', '$password','user')";

        $result = mysqli_query($conn, $sql);

        
        if( $result ){
            echo "
            <script>
                alert('Success adding data');
                document.location.href = 'home.php';

            </script>

            ";

        }else{
            echo "
            <script>
                alert('Failed adding data');
                document.location.href = 'signUp.html';

            </script>

            ";


        }

        // $_SESSION['fullname'] = $fullname;
        $_SESSION['username'] = $username;
        // $_SESSION['email'] = $email;
        // $_SESSION['number'] = $noHp;
        // $_SESSION['password'] = $password;
        
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./assets/plane.png">

    
    <style>
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
      margin: 0;
      }

      /* Firefox */
      input[type=number] {
        -moz-appearance: textfield;
      }
  </style>

  </head>
  <body>
   
      
    <div class="icon">
      <a href="index.html">
        <img src="./assets/next.png" alt="" width="80px" style="transform :rotate(180deg)">

      </a>
    </div>
    
    <div class="login">

      
      <h2>Sign Up</h2>
      <span>
        
        Password and confirm password dosent exist

      </span>

      <form action=""   method="POST" class="login-form">
        <input type="text" name="fullName" id="fullName" placeholder="Full Name" required>

        <input type="text" id="username" name="username" placeholder="Username" required>

        <input type="email" id="email" name="email" placeholder="Email" required>

        <input type="number" id="number" name="number" placeholder="Nomor Telepon" required>

        <input type="password" name="password" id="password" placeholder="Password" required/>
        <input type="password" name="cpassword" placeholder="Confirm Password" required />

        
        
        <button type="submit" name="submit">LOGIN</button>
        
        <a href="login.php">already have an account ? </a>
        
      </form>


    </div>
  </body>
</html>