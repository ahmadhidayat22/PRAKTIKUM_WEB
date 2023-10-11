<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./signup/style.css" /> -->

    <title>Login</title>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form action="" method="POST" class="login-form"  >
           <input type="text" name="username" class="text" placeholder="Username" autocomplete="off"  required>

            <input type="password" name="password" class="text" placeholder="password " required>

            <button type="submit" name="submit">LOGIN</button>




        </form>
    </div>
    
</body>
</html>

<?php 
session_start();
// session_destroy();

// // Jika pengguna telah login dan memiliki sesi yang valid, langsung arahkan ke halaman home
// if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
//     header('Location: ./home.php');
//     exit();
// }

print_r($_SESSION);
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == ($_SESSION['username']) && $password == ($_SESSION['password'])) {
        echo "
        <script> 

            window.location.href = './home.php';
        </script>
        ";
        exit();
    } else if ($username == 'admin' && $password == '123') {
        echo 'admin form';
    } else {
        echo "invalid username/password";
    }
}
?>
