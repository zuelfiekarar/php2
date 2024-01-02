<?php
$koneksi = mysqli_connect("localhost", "root", "", "siam");
//cek koneksi
if(!$koneksi){
    die("Error Koneksi: ".mysqli_connect_errno());
}
?>