<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-plus-square"></i> Input Data Kendaraan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="data_kendaraan">Data Kendaraan</a></li>
                    <li class="breadcrumb-item active">Input Data Kendaraan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->

    <form action="data_kendaraan" method="POST">
        <a href="data_kendaraan" class="btn text-light" style="background-color: #042165;"><i
                class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        <div class="card mt-3">
            <div class="card-header" style="background-color: #042165;">
                <h3 class="card-title text-white">Data Kendaraan</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">No Plat Kendaraan</label>
                            <input type="text" name="nik" class="form-control" id="" placeholder="Masukkan No plat">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nm" class="form-control" id="" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Kendaraan Masuk</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="formjkjk">
                            <div class="form-group">
                                <label for="">Progress Perbaikan</label>
                                <select class="form-control select2" name="dusun" style="width: 100%;">
                                    <option hidden>--Pilih Jenis--</option>
                                    <?php
                                    $result_dusun = $mysqli->query("SELECT * FROM tabel_dusun");
                                    while ($rows_dusun = $result_dusun->fetch_object()) {
                                        echo "
                                                <option value='$rows_dusun->id'>$rows_dusun->dusun</option>
                                            ";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">Data Keterangan</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="form-group">
                                    <div class="form-check-inline mt-2">
                                        <label class="form-check-label">
                                            <input type="radio" name="penerima_bantuan" class="form-check-input"
                                                value="1">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <select class="form-control select ceks" name="jenis_bantuan" style="width: 100%;">
                                        <option value="" hidden>--Lama Pengerjaan--</option>
                                        <option value="BPNT">1 Hari</option>
                                        <option value="PKH">3 Hari</option>
                                        <option value="BST">1 Minggu</option>
                                        <option value="BLT">2 Minggu
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-3">
                <button type="submit" name="simpan_data" class="btn btn-block btn-success float-right">
                    <i class="fas fa-save"></i> Simpan Data</button>
            </div>
        </div>
    </form>
</section>