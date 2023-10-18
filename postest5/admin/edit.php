<?php
require "../server.php";
$id =$_GET["id"];

$result =mysqli_query($conn,"select * from tiket where id = '$id'" );

$tiket =[];

while ($row = mysqli_fetch_assoc($result)){
    $tiket[] = $row;
}

$tiket = $tiket[0];

if (isset($_POST['tambah'])) {
    $maskapai = $_POST["maskapai"];
    $asal = $_POST["asal"];
    $tujuan = $_POST["tujuan"];
    $kelas = $_POST["kelas"];

    if ($asal != $tujuan) {
        $result = mysqli_query($conn , "update tiket set id ='$id', maskapai='$maskapai', asal = '$asal', tujuan = '$tujuan', kelas = '$kelas' where id = '$id'");
        if ($result) {
            echo "
            <script>
            alert('Data Berhasil diubah!');
            document.location.href = 'kelolatiket.php';
            </script>
        ";

        } else {
            echo "
                <script>
                alert('Data Gagal diubah!');
               
                </script>
            ";
        }



    } else {
        echo "
                <script>
                alert('Asal dan tujuan tidak boleh sama');
              
                </script>
            ";
    }


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

    <div class="tambah_tiket">
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label for="">Maskapai </label>

                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="maskapai" id="" value="<?= $tiket["maskapai"] ?>"><br>

                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="">Asal </label>

                    </td>
                    <td>:</td>

                    <td>
                        <input type="text" name="asal" value="<?= $tiket["asal"] ?>" > <br>

                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="">Tujuan </label>

                    </td>
                    <td>:</td>

                    <td>
                        <input type="text" name="tujuan" value="<?= $tiket["tujuan"] ?>"> <br>

                    </td>
                </tr>
                <tr>

                    <td>
                        <label for="">Kelas </label>

                    </td>
                    <td>:</td>

                    <td>
                        <input type="text" name="kelas" value="<?= $tiket["kelas"] ?>"> <br>

                    </td>
                </tr>


            </table>


            <button type="submit" name="tambah">Submit</button>
        </form>

    </div>




</body>

</html>