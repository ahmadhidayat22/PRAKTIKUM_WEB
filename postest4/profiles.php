<?php 
session_start();

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
            <i class="bi bi-arrow-left-circle-fill"></i>
        </a>

    </span>
    
    <div class="aside">

        <div class="head"><i class="bi bi-person-circle"></i>
            <h2><?= $_SESSION['username'] ?></h2>
        </div>
            
    
         <ul>
            <li><span><i class="bi bi-bookmark"></i>
                <p>Saved</p>
            </span></li>

            <li><span>
            <i class="bi bi-wallet"></i>
                <p>Bills</p>
            </span></li>

            <li>
                <span>
                <i class="bi bi-bag"></i>
                <p>My Booking</p>
                </span>

            </li>

            <li><span>
                <i class="bi bi-gear"></i>
                <p>setting</p>
            </span></li>

            <li><span>
            <i class="bi bi-power"></i>
            <p>Logout</p>
            </span></li>
        </ul>
    </div>

    <section>
        <div class="top">
            <h3>Personal Data</h3>
        </div>
            <div class="isi">
                <p>Full Name</p>
                <div><?php echo $_SESSION['fullname']; ?></div>
           
            </div>
            <div class="isi">
                <p>Email</p>
                <div><?php echo $_SESSION['email']; ?></div>
           
            </div>
            <div class="isi">
                <p>Phone Number</p>
                <div><?php echo $_SESSION['number']; ?></div>
           
            </div>
            <div class="isi">
                <p>Password</p>
                <div><?php echo $_SESSION['password']; ?></div>
           
            </div>

    </section>
    
</body>
</html>