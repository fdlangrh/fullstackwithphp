<?php
include "../koneksi/koneksi.php";


if (isset($_POST['hapus'])) {

    $result = mysqli_query($koneksi, " DELETE FROM tb_siswa WHERE id_siswa= '$_POST[id_siswa]' ") or die(mysql_error());

    if ($result) {
        echo "<script>
                alert('HAPUS DATA SISWA BERHASIL!!!')
                document.location='tampil_data_siswa.php';
                </script>";
    } else {
        echo "<script>
                alert('HAPUS DATA SISWA BERHASIL!!!')
                document.location='tampil_data_siswa.php';
                </script>";
    }
}
?>