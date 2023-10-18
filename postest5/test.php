<?php
session_start();
// session_abort();
require 'server.php';

$result = mysqli_query($conn, "SELECT * FROM user_account");
$users = [];

while ($row = mysqli_fetch_assoc($result)){
    $users[] = $row;
   
}
// print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($users as $user) : ?>
            <span>
                <li><?php echo $user["fullname"]; ?></li>
                <li><?php echo $user["username"]; ?></li>
                <li><?php echo $user["email"]; ?></li>
                <li><?php echo $user["password"]; ?></li>

            </span>
        <?php endforeach; ?>

</body>
</html>