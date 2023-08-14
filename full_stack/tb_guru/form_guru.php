<?php
include "../koneksi/koneksi.php";

$id_guru = $_POST['id_guru'];
$nik = $_POST['nik_guru'];
$nama = $_POST['nama'];
$tpl = $_POST['tempat_lahir'];
$tgl = $_POST['tanggal_lahir'];
$jk = $_POST['Jenis_kelamin'];
$gd = $_POST['golongan_darah'];
$alm = $_POST['alamat'];
$agm = $_POST['agama'];
$sp = $_POST['status_perkawinan'];
$pkr = $_POST['pekerjaan'];
$kwr = $_POST['kewarganegaraan'];



$result = mysqli_query($koneksi, "INSERT INTO tb_guru
VALUES('$id_guru', '$nik', '$nama','$tpl','$tgl', '$jk', '$gd', '$alm', '$agm', '$sp', '$pkr', '$kwr')");
?>

<script language='javascript'>
    alert('DATA ANDA SUDAH TERSIMPAN');
    document.location='tampil_data_guru.php';

</script>