<?php
function tampil_data($mysqli)
{
    $sql = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_pendidikan ON tabel_kependudukan.NIK=tabel_pendidikan.NIK JOIN tabel_pekerjaan ON tabel_kependudukan.NIK=tabel_pekerjaan.NIK ORDER BY tabel_kependudukan.NO_KK DESC");
    while ($row = $sql->fetch_assoc()) {
        $sql_dusun = $mysqli->query("SELECT * FROM tabel_dusun WHERE id='$row[DSN]'");
        $row_dusun = $sql_dusun->fetch_assoc();
        ?>
        <tr>

            <td>
                <?= $row['NIK']; ?>
            </td>
            <td>
                <?= $row['NAMA_LGKP']; ?>
            </td>
            <td>
                <?= tgl_indo($row['TGL_LHR']); ?>
            </td>s
            <td>
                <?= $row_dusun['dusun']; ?>
            </td>
            <td>
                <button type="button" class="btn btn-default" data-toggle="dropdown">
                    <i class="fas fa-cog"></i>
                </button>
                <div class="dropdown-menu">
                    <form action="data_kendaraan" method="POST">
                        <input type="hidden" name="nik" value="<?= $row['NIK']; ?>">
                        <button class="dropdown-item" type="submit" name="hapus_data"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                    <a href="edit_data_kendaraan/<?= $row['NIK']; ?>" class="dropdown-item">Edit</a>
                </div>
            </td>
        </tr>
        <?php
    }
}
?>