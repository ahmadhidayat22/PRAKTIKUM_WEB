
<?php
session_set_cookie_params(10800); // Mengatur waktu kedaluwarsa sesi menjadi 3 jam
session_start();

if($_POST['password'] == $_POST['cpassword']){


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullName"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $noHp = $_POST["number"];
        $password = $_POST["password"];
    
        $_SESSION['fullname'] = $fullname;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['number'] = $noHp;
        $_SESSION['password'] = $password;
        
    }
    
    header('location:./home.php');
}
else{
    

    echo "
    <script>
    alert('Please enter');
    </script>
    ";
    
    header('location:./signUp.html');
    
}

?>
