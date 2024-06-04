<?php error_reporting(0);
include 'app/post/post_data_kependudukan.php'; ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3><i class="nav-icon fas fa-users"></i> Data Kendaraan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Data Kendaraan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="input_data_kendaraan" class="btn btn-primary">
                    <i class="fas fa-plus-square"></i> Data Kendaraan
                </a>
                <a href="app/print/data_kendaraan.php" target="_BLANK" class="btn btn-success">
                    <i class="fas fa-print"></i> Print
                </a>
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Data Kendaraan</h3>
                    </div>
                    <!-- .card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped example3" style="font-size: 14px;">
                                <thead>
                                    <tr>
                                        <th>No Kendaraan</th>
                                        <th>Nama Pemilik Kendaraan</th>
                                        <th>Tanggal Kendaraan Masuk</th>
                                        <th>Status kendaraan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php tampil_data($mysqli); ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>