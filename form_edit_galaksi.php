<?php
require "proses_login.php";

session_start();
if (isset($_SESSION['username'])) :
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Tabel Galaksi</title>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	

	<h1 class="h3 mb-2 mt-3 text-gray-800">Daftar Galaksi</h1>
	<div class="card shadow mb-4">

                        <div class="card-body">


	<a href="index.php">< Lihat Semua Data</a>
	
	<h3>Edit Galaksi</h3>
	<form action="proses_edit.php" method="post">
		<?php 
		include "+koneksi.php";
		$jenis_edit = $_GET['jenis'];
		if ($jenis_edit == "galaksi"){
			$id = $_GET['id'];
			$query = mysqli_query($host,"SELECT * FROM galaksi WHERE id_galaksi = '$id'") or die(mysqli_error($host,));
			$data = mysqli_fetch_array($query);
		}
		

		?>		
		<table>
			<tr>
				<td>Nama Konstelasi</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id_galaksi'] ?>">
					<input type="hidden" name="jenis" value="<?php echo $jenis_edit ?>">
					<input type="text" name="nama_konstelasi" value="<?php echo $data['nama_konstelasi'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td>Nama Galaksi</td>
				<td><input type="text" name="nama_galaksi" value="<?php echo $data['nama_galaksi'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Asal Nama</td>
				<td><input type="text" name="asal_nama" value="<?php echo $data['asal_nama'] ?>" required></td>					
			</tr>	
				<td></td>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
	</div>
                    </div>
					</div>
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>
</html>
</body>
</html>

<?php
else :
    header("location: login.php");
endif;
?>