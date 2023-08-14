<?php
include "../koneksi/koneksi.php";


if (isset($_POST['hapus'])) {

    $result = mysqli_query($koneksi, " DELETE FROM tb_guru WHERE id_guru= '$_POST[id_guru]' ") or die(mysql_error());

    if ($result) {
        echo "<script>
                alert('HAPUS DATA GURU BERHASIL!!!')
                document.location='tampil_data_guru.php';
                </script>";
    } else {
        echo "<script>
                alert('HAPUS DATA GURU TIDAK BERHASIL!!!')
                document.location='tampil_data_guru.php';
                </script>";
    }
}
?>