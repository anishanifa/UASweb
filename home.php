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
	<title>Beranda</title>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	

	<h1 class="h3 mb-2 mt-3 text-gray-800">Beranda Kontributor</h1>
	<div class="card shadow mb-4">
                        <div class="card-header py-3">
							<div class="row">
							<div class="col-11"><h6 class="m-0 font-weight-bold text-primary">Menu</h6></div>
							<div class="col-1"><a href="proses_logout.php"><button class="btn btn-danger text-right">Logout</button></a></div>

							</div>
                            
							
                        </div>
                        <div class="card-body">
							<a href="tabel_bintang.php">
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
													Kelola Data</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">Bintang</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-star fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							</a>
							<a href="tabel_planet.php">
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
													Kelola Data</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">Planet</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-circle fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							</a>
							<a href="tabel_galaksi.php">
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
													Kelola Data</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">Galaksi</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-sun fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							</a>
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