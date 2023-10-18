<?php

$conn = mysqli_connect('localhost', 'root','','user_db');

if ( !$conn ){
    die("gagal tehubung ke database : ".mysqli_connect_error());
}

?>