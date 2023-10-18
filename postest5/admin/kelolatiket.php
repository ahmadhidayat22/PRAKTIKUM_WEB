<?php
require '../server.php';


$result = mysqli_query($conn, "select * from tiket");

$tiket = [];

while($record = mysqli_fetch_assoc($result)){
    $tiket[] = $record;
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

    <title>Admin</title>

    <style>
        div ul li:nth-child(3){
  border-left: 8px solid #266f85;

}
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><img src="../assets/account.png" alt=""></li>
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
                    <a href="akun.php">akun user</a>
                </li>
                <li><img src="../assets/ticket.png" alt=""> <a href="kelolatiket.php">kelola tiket</a></li>

                <li class="bott"><img src="../assets/power.png" alt=""><a href="../index.html">Logout</a> </li>
            </ul>
        </div>

    </aside>




    <button class="tambah_btn" onclick="click_btn()" >
        <p>Tambah</p>
        <img src="../assets/plus.png" alt="" width="15px">
    </button>




    <div class="tiket">
        <table border="1">
            <tr>
                <th width="100px">Id Tiket</th>
                <th>Maskapai</th>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Kelas</th>

            </tr>
            <?php foreach ($tiket as $tk) : ?>
            <tr>
                <td> <?= $tk["id"]?> </td>
                <td> <?= $tk["maskapai"]?> </td>
                <td> <?= $tk["asal"]?> </td>
                <td> <?= $tk["tujuan"]?> </td>
                <td> <?= $tk["kelas"]?> </td>
                <td><a href="edit.php?id=<?=$tk["id"];?>"><img src="../assets/pen.png" alt="" width="20px"></a></td>
                <td><a href="hapus.php?id=<?=$tk["id"];?>"><img src="../assets/trash.png" alt=""> </a></td>
            </tr>
            
            <?php endforeach; ?>
        </table>

    </div>

    <script>
        function click_btn (){
            window.location.href = "tambah.php";
        }
    </script>
</body>
</html>