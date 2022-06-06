<?php 
include '+koneksi.php';
$jenis_add = $_POST['jenis'];
if ($jenis_add == "bintang"){
    $nama_konstelasi = $_POST['nama_konstelasi'];
    $nama_khas = $_POST['nama_khas'];
    $nama_modern = $_POST['nama_modern'];

    $query = mysqli_query($host,"INSERT INTO bintang (nama_konstelasi, nama_khas, nama_modern) VALUES ('$nama_konstelasi', '$nama_khas', '$nama_modern')") or die(mysqli_error($host));
    if($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='tabel_bintang.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}

if ($jenis_add == "galaksi"){
    $nama_konstelasi = $_POST['nama_konstelasi'];
    $nama_galaksi = $_POST['nama_galaksi'];
    $asal_nama = $_POST['asal_nama'];

    $query = mysqli_query($host,"INSERT INTO galaksi (nama_konstelasi, nama_galaksi, asal_nama) VALUES ('$nama_konstelasi', '$nama_galaksi', '$asal_nama')") or die(mysqli_error($host));
    if($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='tabel_galaksi.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}

if ($jenis_add == "planet"){
    $nama_planet = $_POST['nama_planet'];
    $periode_revolusi = $_POST['periode_revolusi'];
    $periode_rotasi = $_POST['periode_rotasi'];

    $query = mysqli_query($host,"INSERT INTO planet (nama_planet, periode_revolusi, periode_rotasi) VALUES ('$nama_planet', '$periode_revolusi', '$periode_rotasi')") or die(mysqli_error($host));
    if($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='tabel_planet.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}

?>