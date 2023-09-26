<?php
    require 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM penjualan WHERE `id` = '$id'");

    //Ubah lokasi header sesuai lokasi file di device masing-masing
    header('location: http://localhost/tugasbesar/index.php');
?>