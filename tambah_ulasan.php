<h1 class="mt-4" align="center" >Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if (isset($_POST['submit'])) {
                        $id_user = $_SESSION['user']['id_user'];
                        $id_buku = $_POST['id_buku'];
                        $ulasan = $_POST['ulasan'];
                        $rating = $_POST['rating'];
                        $query = mysqli_query($koneksi, "INSERT INTO ulasan(id_user, id_buku, ulasan, rating) values ('$id_user','$id_buku','$ulasan','$rating')" );

                            
                        if ($query) {
                            echo '<script>alert("Ulasan Berhasil di Buat.");</script>';
                        } else {
                            echo '<script>alert("Gagal Membuat Ulasan.");</script>';
                        }
                    }
                    ?>
                    <div class="mb-3">
                        <label for="buku" class="form-label">Buku</label>
                        <select name="id_buku" id="buku" class="form-control">
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

                    <div class="mb-3">
                        <label for="ulasan" class="form-label">Ulasan</label>
                        <textarea name="ulasan" id="ulasan" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <select name="rating" id="rating" class="form-select">
                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=ulasan" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
