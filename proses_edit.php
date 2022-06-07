<?php 
include '+koneksi.php';


$jenis_edit = $_POST['jenis'];
if ($jenis_edit == "bintang"){
    $id = $_POST['id'];
    $nama_konstelasi = $_POST['nama_konstelasi'];
    $nama_khas = $_POST['nama_khas'];
    $nama_modern = $_POST['nama_modern'];

    $query = mysqli_query($host,"UPDATE bintang SET nama_konstelasi='$nama_konstelasi', nama_khas='$nama_khas', nama_modern='$nama_modern' WHERE id_bintang='$id'") or die(mysqli_error($host));
    if($query) {
        echo "<script>alert('Data berhasil diedit!'); window.location='tabel_bintang.php';</script>";
    } else {
        echo "<script>alert('Data gagal diedit!');</script>";
    }
} 
if ($jenis_edit == "galaksi"){
    $id = $_POST['id'];
    $nama_konstelasi = $_POST['nama_konstelasi'];
    $nama_galaksi= $_POST['nama_galaksi'];
    $asal_nama = $_POST['asal_nama'];

    $query = mysqli_query($host,"UPDATE galaksi SET nama_konstelasi='$nama_konstelasi', nama_galaksi='$nama_galaksi', asal_nama='$asal_nama' WHERE id_galaksi='$id'") or die(mysqli_error($host));
    if($query) {
        echo "<script>alert('Data berhasil diedit!'); window.location='tabel_galaksi.php';</script>";
    } else {
        echo "<script>alert('Data gagal diedit!');</script>";
    }
}
if ($jenis_edit == "planet"){
    $id = $_POST['id'];
    $nama_planet = $_POST['nama_planet'];
    $periode_revolusi = $_POST['periode_revolusi'];
    $periode_rotasi = $_POST['periode_rotasi'];

    $query = mysqli_query($host,"UPDATE planet SET nama_planet='$nama_planet', periode_revolusi='$periode_revolusi', periode_rotasi='$periode_rotasi' WHERE id_planet='$id'") or die(mysqli_error($host));
    if($query) {
        echo "<script>alert('Data berhasil diedit!'); window.location='tabel_planet.php';</script>";
    } else {
        echo "<script>alert('Data gagal diedit!');</script>";
    }
}

?>
