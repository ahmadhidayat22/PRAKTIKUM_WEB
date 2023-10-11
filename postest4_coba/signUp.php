<?php
session_set_cookie_params(3600); // Mengatur waktu kedaluwarsa sesi menjadi 1 jam
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullName"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Lakukan validasi data, lakukan penyimpanan ke database, atau tindakan lain sesuai kebutuhan.
    // Di sini, kita hanya mencetak kembali data yang diinputkan.

//     echo "<div class='container'>";
//     echo "full name: $fullname<br>";
//     echo "Username: $username<br>";
//     echo "Email: $email<br>";
//     echo "Password: $password<br>";;
// // // Tampilkan data lainnya...

//     echo "</div>";
   
    $_SESSION['fullname'] = $fullname;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    }

header('location:./home.php');
// exit();
?>

