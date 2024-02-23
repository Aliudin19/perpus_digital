<?php
include "koneksi.php"
?>
<h1 class="mt-4" align="center"> ULASAN DAN RATING </h1>
<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-12 ">
                <a href="?page=tambah_ulasan" class="btn btn-primary">+ Tambah Ulasan Buku</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Buku</th>
                        <th>Ulasan</th>
                        <th>Rating</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM ulasan LEFT JOIN user on user.id_user= ulasan.id_user LEFT JOIN buku on buku.id_buku = ulasan.id_buku");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['ulasan']; ?></td>
                            <td><?php echo $data['rating']; ?></td>
                            <td>
                                <a href="?page=ubah_ulasan&&id=<?php echo $data['id_ulasan'] ?>" class="btn btn-info">Edit</a>
                                <a onclick="return confirm('Yakin di Hapus nih? ');" href="?page=hapus_ulasan&&id=<?php echo $data['id_ulasan'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>