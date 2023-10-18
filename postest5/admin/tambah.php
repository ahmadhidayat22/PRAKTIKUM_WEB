<?php
require '../server.php';


// $result = mysqli_query($conn, "select * from tiket");

if (isset($_POST['tambah'])) {
    $maskapai = $_POST["maskapai"];
    $asal = $_POST["asal"];
    $tujuan = $_POST["tujuan"];
    $kelas = $_POST["kelas"];

    if ($asal != $tujuan) {


        $result = mysqli_query($conn, "insert into tiket values ('','$maskapai','$asal','$tujuan','$kelas')");

        
        if ($result) {
            echo "
            <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'kelolatiket.php';
            </script>
        ";

        } else {
            echo "
                <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'tambah.php';
                </script>
            ";
        }



    } else {
        echo "
                <script>
                alert('Asal dan tujuan tidak boleh sama');
                document.location.href = 'tambah.php';
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
                        <input type="text" name="maskapai" id="" required autocomplete="off"><br>

                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="">Asal </label>

                    </td>
                    <td>:</td>

                    <td>
                        <input type="text" name="asal" required autocomplete="off"> <br>

                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="">Tujuan </label>

                    </td>
                    <td>:</td>

                    <td>
                        <input type="text" name="tujuan" required autocomplete="off"> <br>

                    </td>
                </tr>
                <tr>

                    <td>
                        <label for="">Kelas </label>

                    </td>
                    <td>:</td>

                    <td>
                        <input type="text" name="kelas" required autocomplete="off"> <br>

                    </td>
                </tr>


            </table>


            <button type="submit" name="tambah">Submit</button>
            <a href="kelolatiket.php" class="cancel">Cancel</a>
        </form>

    </div>




</body>

</html>