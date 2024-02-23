<h1 class="mt-4" align="center">PINJAM BUKU</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if (isset($_POST['submit'])) {
                        $id_user = $_SESSION['user']['id_user'];
                        $id_buku = $_POST['id_buku'];
                        $tgl_peminjaman = $_POST['tgl_peminjaman'];
                        $tgl_pengembalian = $_POST['tgl_pengembalian'];
                        $status_peminjaman = $_POST['status_peminjaman'];
                        $query = mysqli_query($koneksi, "INSERT INTO peminjaman(id_user,id_buku, tgl_peminjaman, tgl_pengembalian, status_peminjaman) VALUES ('$id_user','$id_buku','$tgl_peminjaman','$tgl_pengembalian','$status_peminjaman')");

                        if ($query) {
                            echo '<script>alert("Buku berhasil dipinjam.");</script>';
                        } else {
                            echo '<script>alert("Gagal melakukan peminjaman buku.");</script>';
                        }
                    }
                    ?>
                    <div class="row mb-3">
                        <label for="id_buku" class="col-md-2 col-form-label">Buku</label>
                        <div class="col-md-8">
                            <select name="id_buku" id="id_buku" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($buku = mysqli_fetch_array($buk)) {
                                ?>
                                    <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tgl_peminjaman" class="col-md-2 col-form-label">Tanggal Peminjaman</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="tgl_peminjaman" id="tgl_peminjaman">
                        </div>

                    </div>

                    <div class="row mb-3">
                        <label for="tgl_pengembalian" class="col-md-2 col-form-label">Tanggal Pengembalian</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="tgl_pengembalian" id="tgl_pengembalian">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="status_peminjaman" class="col-md-2 col-form-label">Status Peminjaman</label>
                        <div class="col-md-8">
                            <select name="status_peminjaman" id="status_peminjaman" class="form-control">
                                <option value="dipinjam">Dipinjam</option>
                                <option value="dikembalikan">Dikembalikan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="?page=peminjaman" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>