<?php
    include "koneksi.php"
?>
<h1 class="mt-4" align="center"> PEMINJAMAN BUKU </h1>
<div class="card">
    <div class="card-body">
    <div class="row mb-3">
        <div class="col-md-12 ">
            <a href="?page=tambah_peminjaman" class="btn btn-primary">+ Tambah Peminjaman</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                <th>No</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Peminjaman</th>
                <th>Aksi</th>
                <?php
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM peminjaman");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['Nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['tanggal_Peminjaman']; ?></td>
                    <td><?php echo $data['tanggal_engembalian']; ?></td>
                    <td><?php echo $data['status_peminjaman']; ?></td>
                    <td>
                        <a href="?page=ubah_peminjaman&&id=<?php echo $data['id_peminjaman'] ?>" class="btn btn-info">Edit</a>
                        <a onclick="return confirm('Yakin di Hapus nih? ');" href="?page=hapus_peminjaman&&id=<?php echo $data['id_peminjaman'] ?>" class="btn btn-danger">Delete</a>
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