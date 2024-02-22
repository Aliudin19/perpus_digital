<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if (isset($_POST['submit'])) {
                        // Periksa apakah nama kategori telah diisi
                        if(!empty($_POST['kategori'])) {
                            // Ambil nilai dari input form
                            $nama_kategori = $_POST['kategori'];
                            
                            // Lakukan query untuk menambah data kategori
                            $query = mysqli_query($koneksi, "INSERT INTO kategori (kategori) VALUES ('$nama_kategori')");

                            if ($query) {
                                echo '<script>alert("Tambah Data Berhasil.");</script>';
                            } else {
                                echo '<script>alert("Tambah Data Gagal.");</script>';
                            }
                        } else {
                            // Tampilkan pesan jika nama kategori kosong
                            echo '<script>alert("Nama Kategori harus diisi.");</script>';
                        }
                    }
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Nama Kategori</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="kategori"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            <!-- Tombol Reset untuk membersihkan nilai input -->
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <!-- Tombol Kembali untuk kembali ke halaman kategori -->
                            <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


             </div>
         </main>
         <footer class="py-4 bg-light mt-auto">
             <div class="container-fluid px-4">
                 <div class="d-flex align-items-center justify-content-between small">
                     <div class="text-muted">Copyright &copy; Digital Library  </div>
                 </div>
                 <div class="text-muted">
                         <a href="mailto:alif.saifuddin79@gmail.com">alif.saifuddin79@gmail.com</a> | 
                         <a href="tel:+1234567890">085-791-903-267</a>
                 </div>
             </div>
         </footer>
     </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="js/scripts.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
 <script src="assets/demo/chart-area-demo.js"></script>
 <script src="assets/demo/chart-bar-demo.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
 <script src="js/datatables-simple-demo.js"></script>
</body>
</html>  -->

<!-- <h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Home Dashboard</li>
</ol>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
            <?php
            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategori"));
            ?>
            Total Kategori</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">
            <?php
            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"));
            ?>
            Total Buku</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
            <?php
            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasan"));
            ?>
            Total Ulasan</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">
            <?php
            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM user"));
            ?>
            Total User</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

<dic class="card">
    <div class="card-body">
        <table class="table table-bordered">

            <tr>
                <td width="100">Nama</td>
                <td width="1">:</td>
                <td><?php echo $_SESSION['user']['nama']; ?></td>
            </tr>
            <tr>
                <td width="100">Jenis</td>
                <td width="1">:</td>
                <td><?php echo $_SESSION['user']['level']; ?></td>
            </tr>

            <tr>
                <td width="100">Tanggal login</td>
                <td width="1">:</td>
                <td><?php echo date('d-m-y'); ?></td>
            </tr>
        </table>
    </div>
</dic> -->

<!-- <?php
    include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <?php
                                                if(isset($_POST['register'])){
                                                    $nama = $_POST['nama'];
                                                    $email = $_POST['email'];
                                                    $alamat = $_POST['alamat'];
                                                    $no_telepon = $_POST['no_telepon'];
                                                    $username = $_POST['username'];
                                                    $level = $_POST['level'];
                                                    $password = md5($_POST['password']);

                                                   $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES ('$nama', '$email', '$alamat', '$no_telepon', '$username', '$password', '$level')");

                                                   if ($insert) {
                                                        echo '<script>alert("Selamat, register berhasil. Silahkan Login"); location.href="login.php"</script>';
                                                   }else {
                                                        echo '<script>alert("Register Gagal, Silahkan Coba Lagi");</script>';
                                                   }
                                                }

                                            