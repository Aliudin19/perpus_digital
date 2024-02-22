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

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrasi Perpustakaan Digital</h1>
                            </div>
                            <div class="card-body">
                                <form method="post">
                                    <?php
                                    if (isset($_POST['register'])) {
                                        $nama = $_POST['nama'];
                                        $username = $_POST['username'];
                                        $password = md5($_POST['password']);
                                        $email = $_POST['email'];
                                        $alamat = $_POST['alamat'];
                                        $level = $_POST['level'];
                                        

                                        $insert = mysqli_query($koneksi, "INSERT INTO user (nama,username,password,email,alamat,level) VALUES ('$nama','$username', '$password',  '$email', '$alamat', '$level')");

                                        if ($insert) {
                                            echo '<script>alert("Selamat, register berhasil. Silahkan Login"); location.href="login.php"</script>';
                                        } else {
                                            echo '<script>alert("Register Gagal, Silahkan Coba Lagi");</script>';
                                        }
                                    }

                                    ?>
                                    <div class="form-group">
                                        <label class="samll mb-1">Nama Lengkap</label>
                                        <input class="form-control" id="inputNama" type="text" required name="nama" placeholder="Masukkan Nama lengkap" />

                                    </div>
                                    <div class="form-group">
                                        <label class="samll mb-1">Email</label>
                                        <input class="form-control" id="inputEmail" type="text" required name="email" placeholder="Masukkan Email" />

                                    </div>
                                    <div class="form-group">
                                        <label class="samll mb-1">Alamat</label>
                                        <textarea name="alamat" rows="5" required class="form-control "></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label class="samll mb-1">Username</label>
                                        <input class="form-control" id="inputUsername" type="text" required name="username" placeholder="Masukkan Username" />

                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <input class="form-control" id="inputPassword" type="password" required name="password" placeholder="Password" />

                                    </div>
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="level" required class="form-control">
                                            <option value="peminjam">Peminjam</option>
                                            <option value="admin">Admin</option>
                                        </select>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" name="register" type="submit" value="register">Register</button>
                                        <a class="btn btn-danger" href="login.php">Login</a>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            
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