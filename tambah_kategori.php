<?php
    include "koneksi.php"
?>

<h1 class="mt-4" align="center">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if (isset($_POST['submit'])) {

                            $nama_kategori = $_POST['kategori'];
                            $query = mysqli_query($koneksi, "INSERT INTO kategori (kategori) VALUES ('$nama_kategori')");
                           
                            if ($query) {
                                echo '<script>alert("Tambah Data Berhasil.");</script>';
                            } else {
                                echo '<script>alert("Tambah Data Gagal.");</script>';
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
                            <button type="reset" class="btn btn-secondary">Reset</button>
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
            <div class="text-muted">Copyright &copy; Digital Library </div>
        </div>
        <div class="text-muted">
            <a href="mailto:alif.saifuddin79@gmail.com">alif.saifuddin79@gmail.com</a> |
            <a href="tel:+1234567890">085-791-903-267</a>
        </div>
    </div>
</footer>
</div>
</div>
</html>