<?php
    include "koneksi.php"
?>

<h1 class="mt-4" align="center">Ubah Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    $id = $_GET['id'];
                    if (isset($_POST['submit'])) {                                   
                            $judul = $_POST['judul'];
                            $penulis = $_POST['penulis'];
                            $penerbit = $_POST['penerbit'];
                            $tahun_terbit = $_POST['tahun_terbit'];
                            $deskripsi = $_POST['deskripsi'];
                            $query = mysqli_query($koneksi, "UPDATE buku set judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', deskripsi='$deskripsi'  where id_buku=$id");

                            if ($query) {
                                echo '<script>alert("Ubah Data Berhasil.");</script>';
                            } else {
                                echo '<script>alert("Ubah Data Gagal.");</script>';
                            }
                        } 
                   
                    $query = mysqli_query($koneksi, ("SELECT*FROM buku where id_buku=$id"));
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Judul</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="judul" value="<?php echo $data['judul'] ?>"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Penulis</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="penulis" value="<?php echo $data['penulis'] ?>"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">penerbit</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="penerbit" value="<?php echo $data['penerbit'] ?>"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">tahun_terbit</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="tahun_terbit" value="<?php echo $data['tahun_terbit'] ?>"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Deskripsi</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="deskripsi" value="<?php echo $data['deskripsi'] ?>"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            
                            <a href="?page=buku" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 


