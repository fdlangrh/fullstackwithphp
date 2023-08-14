<?php
include "../koneksi/koneksi.php";


if (isset($_POST['hapus'])) {

    $result = mysqli_query($koneksi, " DELETE FROM tb_karyawan WHERE id_karyawan= '$_POST[id_karyawan]' ") or die(mysql_error());

    if ($result) {
        echo "<script>
                alert('HAPUS DATA karyawan BERHASIL!!!')
                document.location='tampil_data_karyawan.php';
                </script>";
    } else {
        echo "<script>
                alert('HAPUS DATA karyawan BERHASIL!!!')
                document.location='tampil_data_karyawan.php';
                </script>";
    }
}
?>