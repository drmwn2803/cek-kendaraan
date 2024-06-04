<?php
if (isset($_GET['nik'])) {
    $base_url = 'http://localhost/simkbs/';
    include 'app/koneksi.php';

    $sql_profil = "SELECT * FROM tabel_control WHERE id=1";
    $result_profil = $mysqli->query($sql_profil);
    $row_profil = $result_profil->fetch_object();

    include 'views/layout/user/header.php';
    include 'views/layout/user/navbar.php';

    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }

    $query = $mysqli->query("SELECT * FROM tabel_kependudukan WHERE NIK='{$_GET['nik']}' AND bantuan=1");

    if (mysqli_num_rows($query) > 0) {
        $row = $query->fetch_assoc();
        $sql_dusun1 = $mysqli->query("SELECT * FROM tabel_dusun WHERE id='{$row['DSN']}'");
        $row_dusun1 = $sql_dusun1->fetch_assoc();
        ?>
        <main id="main">
            <div class="pt-3" style="min-height: 629px;">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="text-center">
                            <img src="asset_user/img/logo.png" alt="logo" width="5%">
                            <h4>Informasi Status Kendaraan</h4>
                            <!-- pencarian -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3>
                                <a href="beranda" class="btn text-light" style="background-color: #042165;">
                                    <span class="fas fa-arrow-alt-circle-left"></span> Kembali</a>
                            </h3>
                            <div class="card">
                                <div class="card-header">
                                    <small class="card-title">Status Kendaraan</small>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped" id="example1"
                                            style="font-size: 14px;">
                                            <thead>
                                                <tr>
                                                    <th>No Kendaraan</th>
                                                    <th>Nama Pemilik Kendaraan</th>
                                                    <th>Tgl Masuk Kendaraan</th>
                                                    <th>Status Kendaraan</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td><?= $row['NIK'] ?></td>
                                                    <td><?= $row['NAMA_LGKP'] ?></td>
                                                    <td><?= tgl_indo($row['TGL_LHR']) ?></td>
                                                    <td><?= $row_dusun1['dusun'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <?php
    } else {
        ?>
        <main id="main">
            <div class="pt-5" style="min-height: 629px;">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-md-6 align-items-center text-center">
                            <img src="asset_user/img/not.png" alt="not-found" class="img-fluid" width="50%">
                            <h4 style="font-size: 1.4rem;">Status Kendaraan Tidak Ditemukan</h4>
                            <p style="font-size: 0.9rem;">
                                Maaf kami tidak dapat menemukan status Kendaraan yang anda cari.
                                Data tidak ditemukan dikarenakan tidak terdaftar
                                di WEB Cek-Kendaraan atau ada kesalahan data yang didaftarkan di aplikasi Cek-Kendaraan.
                            </p>
                            <p> <b>
                                    Hubungi Admin Untuk Lebih Lanjut
                            </p>

                            <a href="beranda" class="btn btn-sm text-light" style="background-color: #042165;">
                                <span class="fas fa-arrow-alt-circle-left"></span> Kembali</a>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <?php
    }
    include 'views/layout/user/footer.php';
} else {
    ?>
    <script>
        alert("Masukkan NO Kendaraan terlebih dahulu pada form 'Cari Informasi Plat Kendaraan'");
        document.location.href = 'beranda';
    </script>
    <?php
}
?>