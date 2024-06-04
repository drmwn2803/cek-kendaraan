<?php
error_reporting(0);
include 'app/koneksi.php';
$nik = $_GET['id'];
$sql = $mysqli->query("SELECT * FROM tabel_kependudukan 
                        JOIN tabel_konsumsi ON tabel_kependudukan.NIK = tabel_konsumsi.NIK 
                        JOIN tabel_pekerjaan ON tabel_kependudukan.NIK = tabel_pekerjaan.NIK 
                        JOIN tabel_pendidikan ON tabel_kependudukan.NIK = tabel_pendidikan.NIK 
                        JOIN tabel_tabungan ON tabel_kependudukan.NIK = tabel_tabungan.NIK
                        JOIN tabel_dusun ON tabel_kependudukan.DSN = tabel_dusun.id WHERE tabel_kependudukan.NIK = '$nik'");
$row = $sql->fetch_assoc();

if (isset($_POST['edit_data'])) {
    $nik = $_POST['nik'];

    // data individu
    $nokk = $_POST['no_kk'];
    $nm = $_POST['nm'];
    $jk = $_POST['jk'];
    $ibu_hamil = isset($_POST['ibu_hamil']) ? $_POST['ibu_hamil'] : NULL;
    $disabilitas = isset($_POST['disabilitas']) ? $_POST['disabilitas'] : NULL;
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $birthDate = new DateTime($tgl_lahir);
    $today = new DateTime("today");

    $tahun = $today->diff($birthDate)->y;
    $bulan = $today->diff($birthDate)->m;
    $hari = $today->diff($birthDate)->d;

    $agama = $_POST['agama'];
    $hubkel = $_POST['hubkel'];
    $nm_ayah = $_POST['nm_ayah'];
    $nm_ibu = $_POST['nm_ibu'];
    $pend_terakhir = $_POST['pend_terakhir'];
    $pekerjaan = $_POST['pekerjaan'];
    $penghasilan = $_POST['penghasilan'];
    $dusun = $_POST['dusun'];

    // data konsumsi
    $bhn_makanan = isset($_POST['bhn_makanan']) ? $_POST['bhn_makanan'] : NULL;
    $pakaian_pertahun = isset($_POST['pakaian_pertahun']) ? $_POST['pakaian_pertahun'] : NULL;
    $biaya_pengobatan = isset($_POST['biaya_pengobatan']) ? $_POST['biaya_pengobatan'] : NULL;
    $frekuensi_perminggu = isset($_POST['frekuensi_perminggu']) ? $_POST['frekuensi_perminggu'] : NULL;
    $makan_perhari = isset($_POST['makan_perhari']) ? $_POST['makan_perhari'] : NULL;

    // data tabungan
    $kepem_tabungan = isset($_POST['kepem_tabungan']) ? $_POST['kepem_tabungan'] : NULL;
    $jenis_tabungan = isset($_POST['jenis_tabungan']) ? $_POST['jenis_tabungan'] : NULL;
    $harga = isset($_POST['harga']) ? $_POST['harga'] : NULL;
    // var_dump($kepem_tabungan, $jenis_tabungan, $harga);

    //data bantuan
    $bantuan = isset($_POST['penerima_bantuan']) ? $_POST['penerima_bantuan'] : NULL;
    $jenis_bantuan = isset($_POST['jenis_bantuan']) ? $_POST['jenis_bantuan'] : NULL;

    $sql_kependudukan = $mysqli->query("UPDATE tabel_kependudukan 
                                        SET NO_KK='$nokk', NAMA_LGKP='$nm', HBKEL='$hubkel', JK='$jk', TMPT_LHR='$tmp_lahir', 
                                        TGL_LHR='$tgl_lahir', TAHUN='$tahun', BULAN='$bulan', HARI='$hari', 
                                        NAMA_LGKP_AYAH='$nm_ayah', NAMA_LGKP_IBU='$nm_ibu', DSN='$dusun', AGAMA='$agama', 
                                        bantuan='$bantuan', jenis_bantuan='$jenis_bantuan', ibu_hamil='$ibu_hamil', 
                                        disabilitas='$disabilitas' WHERE NIK = '$nik'");
    $sql_tabungan = $mysqli->query("UPDATE tabel_tabungan 
                                    SET NAMA='$nm', KEPEMILIKAN_TABUNGAN='$kepem_tabungan', JENIS_TABUNGAN='$jenis_tabungan', 
                                    HARGA='$harga' WHERE NIK = '$nik'");
    $sql_konsumsi = $mysqli->query("UPDATE tabel_konsumsi 
                                    SET NAMA='$nm', BAHAN_MAKANAN='$bhn_makanan', FREKUENSI_PER_MINGGU='$frekuensi_perminggu', 
                                    PAKAIAN_PER_TAHUN='$pakaian_pertahun', MAKAN_PER_HARI='$makan_perhari', 
                                    BIAYA_PENGOBATAN='$biaya_pengobatan' WHERE NIK = '$nik'");
    $sql_pekerjaan = $mysqli->query("UPDATE tabel_pekerjaan SET NAMA='$nm', PEKERJAAN='$pekerjaan', PENGHASILAN_PER_BULAN='$penghasilan' WHERE NIK = '$nik'");
    $sql_pendidikan = $mysqli->query("UPDATE tabel_pendidikan SET NAMA='$nm', PENDIDIKAN_TERAKHIR='$pend_terakhir' WHERE NIK = '$nik'");

    if ($sql_kependudukan && $sql_tabungan && $sql_konsumsi && $sql_pekerjaan && $sql_pendidikan) {
        ?>
        <script>
            alert("Data Berhasil Diedit.");
            document.location.href = "../data_kendaraan";
        </script>
        <?php
    }
}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Data Kependudukan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../data_kendaraan">Data Kendaraan</a></li>
                    <li class="breadcrumb-item active">Edit Data Kendaraan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <form action="" method="POST">
        <a href="../data_kendaraan" class="btn text-light" style="background-color: #042165;"><i
                class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        <div class="card mt-3">
            <div class="card-header" style="background-color: #042165;">
                <h3 class="card-title text-white">Data Kendaraan</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">No Kendaraan</label>
                            <input type="text" name="nik" class="form-control" id="" value="<?= $nik; ?>"
                                placeholder="Masukkan No Kendaraan" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pemilik Kendaraan</label>
                            <input type="text" name="nm" class="form-control" id="" value="<?= $row['NAMA_LGKP']; ?>"
                                placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Masuk Kendaraan</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="<?= $row['TGL_LHR']; ?>"
                                id="">
                        </div>

                        <div class="form-group">
                            <label for="">Status Kendaraan</label>
                            <select class="form-control select2" name="dusun" style="width: 100%;">
                                <option hidden>--Pilih Dusun--</option>
                                <?php
                                $result_dusun = $mysqli->query("SELECT * FROM tabel_dusun");
                                while ($rows_dusun = $result_dusun->fetch_object()) {

                                    if ($row['dusun'] == $rows_dusun->dusun) {
                                        echo "
                                                    <option value='$rows_dusun->id' selected>$rows_dusun->dusun</option>
                                                ";
                                    } else {
                                        echo "
                                                    <option value='$rows_dusun->id'>$rows_dusun->dusun</option>
                                                ";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md">
            <div class="card">
                <div class="card-header" style="background-color: #042165;">
                    <h3 class="card-title text-white">Data Bantuan</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="form-group">
                                <?php if ($row['bantuan'] == 0): ?>
                                    <div class="form-check-inline mt-2">
                                        <label class="form-check-label">
                                            <input type="radio" name="penerima_bantuan" class="form-check-input" value="1">
                                        </label>
                                    </div>
                                <?php elseif ($row['bantuan'] == 1): ?>
                                    <div class="form-check-inline mt-2">
                                        <label class="form-check-label">
                                            <input type="radio" name="penerima_bantuan" class="form-check-input" value="1"
                                                checked>
                                        </label>
                                    </div>
                                <?php else: ?>
                                    <div class="form-check-inline mt-2">
                                        <label class="form-check-label">
                                            <input type="radio" name="penerima_bantuan" class="form-check-input" value="1">
                                        </label>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <select class="form-control select ceks" name="jenis_bantuan" style="width: 100%;">
                                    <option value="" hidden>--Lama Pengerjaan--</option>
                                    <?php if ($row['jenis_bantuan'] == "BPNT"): ?>
                                        <option value="" hidden>--Lama Pengerjaan--</option>
                                        <option value="BPNT">1 Hari</option>
                                        <option value="PKH">3 Hari</option>
                                        <option value="BST">1 Minggu</option>
                                        <option value="BLT">2 Minggu
                                        </option>
                                    <?php elseif ($row['jenis_bantuan'] == "PKH"): ?>
                                        <option value="" hidden>--Lama Pengerjaan--</option>
                                        <option value="BPNT">1 Hari</option>
                                        <option value="PKH">3 Hari</option>
                                        <option value="BST">1 Minggu</option>
                                        <option value="BLT">2 Minggu
                                        </option>
                                    <?php elseif ($row['jenis_bantuan'] == "BST"): ?>
                                        <option value="" hidden>--Lama Pengerjaan--</option>
                                        <option value="BPNT">1 Hari</option>
                                        <option value="PKH">3 Hari</option>
                                        <option value="BST">1 Minggu</option>
                                        <option value="BLT">2 Minggu
                                        </option>
                                    <?php elseif ($row['jenis_bantuan'] == "BLT"): ?>
                                        <option value="" hidden>--Lama Pengerjaan--</option>
                                        <option value="BPNT">1 Hari</option>
                                        <option value="PKH">3 Hari</option>
                                        <option value="BST">1 Minggu</option>
                                        <option value="BLT">2 Minggu
                                        </option>
                                    <?php else: ?>
                                        <option value="" hidden>--Lama Pengerjaan--</option>
                                        <option value="BPNT">1 Hari</option>
                                        <option value="PKH">3 Hari</option>
                                        <option value="BST">1 Minggu</option>
                                        <option value="BLT">2 Minggu
                                        </option>
                                    <?php endif; ?>
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
                <button type="submit" name="edit_data" class="btn btn-block btn-success float-right"><i
                        class="fas fa-save"></i> Simpan Perubahan Data</button>
            </div>
        </div>
    </form>
</section>

<script src="<?= $base_url; ?>plugins/jquery/jquery.min.js"></script>