<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">


            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-indigo elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Kendaraan</span>
                        <span class="info-box-number">
                            <?php
                            $sql_total = $mysqli->query("SELECT * FROM tabel_kependudukan");
                            echo mysqli_num_rows($sql_total);
                            ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
        <!-- End Info boxes -->
    </div>

</section>