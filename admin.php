<?php
session_start();
// mengecek admin login atau tidak
if (!isset($_SESSION['username'])) {
    ?>
    <script>
        alert('Anda harus login untuk mengakses halaman ini!');
        window.location.href = 'login';
    </script>
    <?php
    return false;
}

$base_url = 'http://localhost/cek-kendaraan/';
include 'app/koneksi.php';

$sql_profil = "SELECT * FROM tabel_control WHERE id=1";
$result_profil = $mysqli->query($sql_profil);
$row_profil = $result_profil->fetch_object();

include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar.php';
?>
<div class="content-wrapper">
    <?php
    if (isset($_GET['views']) && $_GET['views'] == "dashboard") {
        include 'views/pages/dashboard.php';
    } else if (isset($_GET['views']) && $_GET['views'] == "data_kendaraan") {
        include 'views/pages/data_kendaraan.php';
    } else if (isset($_GET['views']) && $_GET['views'] == "input_data_kendaraan") {
        include 'views/pages/input_data_kendaraan.php';
    } else if (isset($_GET['views']) && $_GET['views'] == "edit_data_kendaraan") {
        include 'views/pages/edit_data_kendaraan.php';
    } else if (isset($_GET['views']) && $_GET['views'] == "detail_penduduk") {
        include 'views/pages/detail_penduduk.php';
    } else if (isset($_GET['views']) && $_GET['views'] == "control_panel") {
        include 'views/pages/control_panel.php';
    } else {
        include 'views/pages/dashboard.php';
    }
    ?>
</div>
<?php include 'views/layout/footer.php'; ?>