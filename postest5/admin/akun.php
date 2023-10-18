<?php

require '../server.php';


$result = mysqli_query($conn, "select id,fullname,username,email,no_hp from user_account where id != '1'");

$akun = [];

while($record = mysqli_fetch_assoc($result)){
    $akun[] = $record;
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/plane.png">
  <link rel="stylesheet" href="admin.css">
  <link rel="shortcut icon" href="../assets/admin.png">

  <style>
    div ul li:nth-child(2){
  border-left: 8px solid #266f85;

}
  </style>
  <title>Admin</title>
</head>

<body>
  <nav>
    <ul>
      <li style="font-size: 35px;"><i class="bi bi-person-circle"></i></li>
      <li>admin</li>
    </ul>
  </nav>


  <label class="hamburger-menu">
    <input type="checkbox" />
  </label>
  <aside class="sidebar">
    <div>
      <ul>
        <li><img src="../assets/shopping-cart.png" alt="">
          <a href="pesanan.php">Pesanan</a>
        </li>
        <li><img src="../assets/account.png" alt=""> 
        <a href="akun.php">akun user</a> </li>
        <li><img src="../assets/ticket.png" alt=""> <a href="kelolatiket.php">kelola tiket</a></li>

        <li class="bott"><img src="../assets/power.png" alt=""><a href="../index.html">Logout</a> </li>
      </ul>
    </div>

  </aside>
  

  <div class="akun">
        <table >
            <tr>
                <th width="100px">Id Akun</th>
                <th>Fullname</th>
                <th>Username</th>
                <th>Email</th>
                <th>no_hp</th>

            </tr>
            <?php foreach ($akun as $acc) : ?>
            <tr>
                <td> <?= $acc["id"]?> </td>
                <td> <?= $acc["fullname"]?> </td>
                <td> <?= $acc["username"]?> </td>
                <td> <?= $acc["email"]?> </td>
                <td> <?= $acc["no_hp"]?> </td>
                
            </tr>
            
            <?php endforeach; ?>
        </table>

    </div>

</body>

</html>