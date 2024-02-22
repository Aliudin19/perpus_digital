<?php
    include "koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpus - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
   
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form method="post">      
                                   
                                        <?php
                                            if(isset($_post['login'])){
                                                $username = $_post['username'];
                                                $password = md5($_post['password']);

                                                $data = mysqli_query($koneksi, 	"SELECT*FROM user where username='$username' and password ='$password'");
                                                $cek = mysqli_num_rows($data);
                                                if($cek > 0 ){
                                                $_SESSION['user'] = mysqli_fetch_array($data);
                                                    echo '<script>alert("selamat datang, login berhasil"); location.href="index.php"; <script>';
                                                    } else {
                                                    echo '<script> alert("Maaf login gagal"<script>';
                                                } 
                                            }
                                        ?>                              
                                        <div class="form-group">
                                        <label class="samll mb-1">Username</label>
                                        <input class="form-control" id="inputUsername" type="text" required name="username" placeholder="Masukkan username" />

                                    </div>
                                    <div class="form-group">
                                        <label class="samll mb-1">Password</label>
                                        <input class="form-control" id="inputPassword" type="password" required name="password" placeholder="Masukkan password" />

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">   
                                        <button class="btn btn-primary" href="index.php" name="login" value="login" >Login</button>
                                        <a class="btn btn-danger" name="register" href="register.php" value="register">Register</a>
                                    </div>
                                   
                                </form>
                                    <hr>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>