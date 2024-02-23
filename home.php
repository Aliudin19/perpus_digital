<?php
include "koneksi.php"
?>
<div class="container-fluid">
<head>
<style>
    .container-fluid {  
        border: 1px solid #ccc; /* Border solid dengan warna abu-abu */
        border-radius: 10px; /* Sudut elemen yang sedikit membulat */
        padding: 20px; /* Padding agar konten tidak terlalu dekat dengan tepi */
        margin-bottom: 20px; /* Margin bawah agar terlihat terpisah dari elemen lain */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan ringan */
    }

    /* Styling untuk judul dashboard */
    .dashboard-title {
        font-size: 24px; /* Ukuran font judul */
        color: #333; /* Warna teks judul */
        margin-bottom: 20px; /* Margin bawah untuk memberi ruang di bawah judul */
    }

    /* Styling untuk tombol Generate Report */
    .generate-report-btn {
        background-color: #4e73df; /* Warna latar belakang tombol */
        color: #fff; /* Warna teks tombol */
        border: none; /* Hapus border tombol */
        border-radius: 5px; /* Sudut tombol yang sedikit membulat */
        padding: 8px 16px; /* Padding tombol */
        text-decoration: none; /* Hapus garis bawah default pada tautan */
    }

    /* Efek hover pada tombol Generate Report */
    .generate-report-btn:hover {
        background-color: #2e59d9; /* Warna latar belakang saat hover */
    }
    
</style>

</head>
<!-- Page Heading -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 centered-text">HOME DASHBOARD</h1>
    </div>
    <!-- Isi dashboard lainnya -->
</div>


<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Kategori Buku</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategori"));
                        ?>  
                    </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                           Total Ulasan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasan"));
                        ?> 
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Total Buku
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                <?php
                                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM Buku"));
                                ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM user"));
                        ?> 
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">

            <tr>
                <td width="100">Nama</td>
                <td width="1">:</td>
                <td>
                    <?php echo $_SESSION['user']['nama'] ?>
                </td>
            </tr>
            <tr>
                <td width="100">Jenis User</td>
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
</div>