<?php 
include '+koneksi.php';

$pilihan = $_POST['pilihan'];
if ($pilihan == "1"){
    echo "<script>alert('Sampai ke Tujuan'); window.location='data_bintang.php';</script>";
}
if ($pilihan == "2"){
    echo "<script>alert('Sampai ke Tujuan'); window.location='data_planet.php';</script>";
}
if ($pilihan == "3"){
    echo "<script>alert('Sampai ke Tujuan'); window.location='data_galaksi.php';</script>";
}



?>