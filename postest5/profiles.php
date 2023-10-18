<?php 
session_start();
require 'server.php';
$name = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM user_account WHERE username='$name'");

// var_dump($result);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/styleProfiles.css">
    <link rel="shortcut icon" href="./assets/plane.png">

    <title>Profile</title>

    
</head>
<body>
    <span class="user_hero">
        <a href="home.php">
            <img src="./assets/next.png" alt="">
        </a>

    </span>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
    
    <div class="aside">

        <div class="head"><img src="./assets/account.png" alt="">
            <h2><?= $row['username'] ?></h2>
        </div>
            
    
         <ul>
            <li><span>
                <img src="./assets/saved.png" alt="">
                <a href="">Saved</a>
            </span></li>

            <li><span>
            <img src="./assets/wallet.png" alt="">
            <a href="">Bills</a>
            </span></li>

            <li>
                <span>
                <img src="./assets/shopping-bag.png" alt="">
                <a href="">My Booking</a>
                </span>

            </li>

            <li><span>
            <img src="./assets/settings.png" alt="">
            <a href="">Setting</a>
            </span></li>

            <li><span>
            <img src="./assets/shutdown.png" alt="">
            <a href="index.html">Logout</a>
            </span></li>
        </ul>
    </div>

    <section>
        <div class="top">
            <h3>Personal Data</h3>
        </div>
            <div class="isi">
                <p>Full Name</p>
                <div><?php echo $row['fullname']; ?></div>
           
            </div>
            <div class="isi">
                <p>Email</p>
                <div><?php echo $row['email']; ?></div>
           
            </div>
            <div class="isi">
                <p>Phone Number</p>
                <div><?php echo $row['no_hp']; ?></div>
           
            </div>
            <div class="isi">
                <p>Password</p>
                <div><?php echo $row['password']; ?></div>
           
            </div>

    </section>
    <?php endwhile ?>
    
</body>
</html>