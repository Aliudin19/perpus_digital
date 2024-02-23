<?php
include "koneksi.php"
?>
<h1 class="mt-4" align="center ">Tambah Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if (isset($_POST['submit'])) {
                        $id_kategori = $_POST['id_kategori'];
                        $judul = $_POST['judul'];
                        $penulis = $_POST['penulis'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $deskripsi = $_POST['deskripsi'];
                        $deskripsi = $_POST['deskripsi'];
                        $query = mysqli_query($koneksi, "INSERT INTO buku(id_kategori, judul, penulis, penerbit, tahun_terbit, deskripsi) values ('$id_kategori','$judul','$penulis','$penerbit','$tahun_terbit','$deskripsi')");

                        if ($query) {
                            echo '<script>alert("Tambah Data Berhasil."); </script>';
                        } else {
                            echo '<script>alert("Tambah Data Gagal.");</script>';
                        }
                    }

                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Kategori</div>
                        <div class="col-md-8">
                            <select name="id_kategori" id="" class="form-control" >
                                <?php
                                $kat = mysqli_query($koneksi, "SELECT*FROM kategori");
                                while ($kategori = mysqli_fetch_array($kat)) {
                                ?>
                                <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Judul</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="judul"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Penulis</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="penulis"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Penerbit</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="penerbit"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Tahun Terbit</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="tahun_terbit"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Deskripsi</div>
                        <div class="col-md-8">
                            <textarea name="deskripsi" id="" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary" >Simpan</button>
                            <!-- Tombol Reset untuk membersihkan nilai input -->
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <!-- Tombol Kembali untuk kembali ke halaman kategori -->
                            <a href="?page=buku" class="btn btn-danger">Kembali</a>
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
</body>

</html>