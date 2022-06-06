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
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><a href="form_tambah_galaksi.php">+ Tambah Galaksi Baru</a></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
							<table class="table table-bordered" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No.</th>
										<th>nama konstelasi</th>
										<th>nama galaksi</th>
										<th>asal nama</th>
										<th></th>
									</tr>
								</thead>
								<?php 
								include "+koneksi.php";
								$query = mysqli_query($host,"SELECT * FROM galaksi") or die(mysqli_error($host));
								$nomor = 1;
								while($data = mysqli_fetch_array($query)) { ?>
								<tbody>
									<tr>
										<td align="center"><?php echo $nomor++; ?>.</td>
										<td><?php echo $data['nama_konstelasi']; ?></td>
										<td><?php echo $data['nama_galaksi']; ?></td>
										<td><?php echo $data['asal_nama']; ?></td>
										<td width="90px" align="center">
											<a href="form_edit_galaksi.php?jenis=galaksi&id=<?php echo $data['id_galaksi']; ?>">Edit</a> | 
											<a href="proses_hapus.php?jenis=galaksi&id=<?php echo $data['id_galaksi']; ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>					
										</td>
									</tr>
								</tbody>
								<?php
								} ?>
							</table>
                            </div>
							<a href="home.php"><button class="btn btn-warning" >kembali</button></a>
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
<?php
else :
    header("location: login.php");
endif;
?>