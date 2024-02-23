<h1 class="mt-4" align="center">Edit Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    $id = $_GET['id'];
                    if (isset($_POST['submit'])) {
                        $id_buku = $_POST['id_buku'];
                        $id_user = $_SESSION['user']['id_user'];
                        $ulasan = $_POST['ulasan'];
                        $rating = $_POST['rating'];
                        $query = mysqli_query($koneksi, "UPDATE ulasan SET id_buku='$id_buku', ulasan ='$ulasan', rating='$rating' WHERE id_ulasan=$id");

                        if ($query) {
                            echo '<script>alert("Ulasan Berhasil di Ubah.");</script>';
                        } else {
                            echo '<script>alert("Gagal Mengubah Ulasan.");</script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM ulasan WHERE id_ulasan=$id");
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="row mb-3">
                        <label for="id_buku" class="col-md-2 col-form-label">Buku</label>
                        <div class="col-md-8">
                            <select name="id_buku" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($buku = mysqli_fetch_array($buk)) {
                                    $selected = ($data['id_buku'] == $buku['id_buku']) ? 'selected' : '';
                                ?>
                                    <option value="<?php echo $buku['id_buku']; ?>" <?php echo $selected; ?>><?php echo $buku['judul']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="ulasan" class="col-md-2 col-form-label">Ulasan</label>
                        <div class="col-md-8">
                            <textarea name="ulasan" rows="5" class="form-control"><?php echo $data['ulasan']; ?></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="rating" class="col-md-2 col-form-label">Rating</label>
                        <div class="col-md-8">
                            <select name="rating" class="form-control">
                                <?php
                                for ($i = 1; $i <= 10; $i++) {
                                    $selected = ($data['rating'] == $i) ? 'selected' : '';
                                ?>
                                    <option value="<?php echo $i ?>" <?php echo $selected; ?>><?php echo $i ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="?page=ulasan" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
