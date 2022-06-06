<?php
require "proses_login.php";

session_start();
if (!isset($_SESSION['username'])) :
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/14edc419b7.js"></script>
    </head>
    <title>Login</title>

    <body background="https://media.giphy.com/media/RHIKETUlUINYvV7CAO/giphy.gif" style="background-size: cover;">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <form method="POST">
                            <?php
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "logout"){
                                    echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
                                    <div>Anda telah berhasil logout</div></div>";
                                }
                            }
                            ?>
                            <div class="mb-md-5 mt-md-4 pb-5">
            
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Masukan Username dan Password!</p>
            
                            <div class="form-outline form-white mb-4">
                            <input type="text" class="form-control" id="username" name="username" />
                            <label for="username" class="form-label">Username</label>
                            </div>
            
                            <div class="form-outline form-white mb-4">
                            <input name="password" type="password" class="form-control" id="password" />
                            <label for="password" class="form-label">Password</label>
                            </div>
            
                            <button name="masuk" class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                            
                            <div>
                            <br>
                            <br>
                            <br>
                            <p class="text-white-50 mb-5">Kembali ke <a href="index.php">Halaman Utama</a></p>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>
</html>
<?php
else :
    header("location: home.php");
endif;
?>

<?php
if (isset($_POST['masuk'])) {
    session_start();
    proses_login($_POST['username'], $_POST['password']);
    header("location:home.php");
}
?>