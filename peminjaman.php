<h1 class="mt-4" align="center" >PEMINJAMAN BUKU</h1>
<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-12">
                <a href="?page=tambah_peminjaman"class="btn btn-primary"><i class="fa fa-plus"></i>Pinjam Buku</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status Peminjaman</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON user.id_user = peminjaman.id_user LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku where peminjaman.id_user=" . $_SESSION['user']['id_user']);
                        if ($query) {
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['judul']; ?></td>
                                    <td><?php echo $data['tgl_peminjaman']; ?></td>
                                    <td><?php echo $data['tgl_pengembalian']; ?></td>
                                    <td><?php echo $data['status_peminjaman']; ?></td>
                                    <td>
                                        <a href="?page=ubah_peminjaman&&id=<?php echo $data['id_peminjaman'] ?>" class="btn btn-info">Edit</a>
                                        <a onclick="return confirm('Yakin di Hapus nih? ');" href="?page=hapus_peminjaman&&id=<?php echo $data['id_peminjaman'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>