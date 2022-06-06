<?php 
include '+koneksi.php';

$jenis_hapus = $_GET['jenis'];
if ($jenis_hapus == "bintang"){
    $id = $_GET['id'];
    $query = mysqli_query($host,"DELETE FROM bintang WHERE id_bintang = '$id'") or die(mysqli_error($host));
    if($query) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='tabel_bintang.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); window.location='tabel_bintang.php';</script>";
    }
}

if ($jenis_hapus == "galaksi"){
    $id = $_GET['id'];
    $query = mysqli_query($host,"DELETE FROM galaksi WHERE id_galaksi = '$id'") or die(mysqli_error($host));
    if($query) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='tabel_galaksi.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); window.location='tabel_galaksi.php';</script>";
    }
}

if ($jenis_hapus == "planet"){
    $id = $_GET['id'];
    $query = mysqli_query($host,"DELETE FROM planet WHERE id_planet = '$id'") or die(mysqli_error($host));
    if($query) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='tabel_planet.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); window.location='tabel_planet.php';</script>";
    }
}

?>