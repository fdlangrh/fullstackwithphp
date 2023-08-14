<?php
include "../koneksi/koneksi.php";

$id_siswa = $_POST['id_siswa'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tpl = $_POST['tempat_lahir'];
$tgl = $_POST['tanggal_lahir'];
$jk = $_POST['jenis_kelamin'];
$gd = $_POST['golongan_darah'];
$alm = $_POST['alamat'];
$agm = $_POST['agama'];
$sp = $_POST['status_perkawinan'];
$pkr = $_POST['statuspr'];
$kwr = $_POST['kewarganegaraan'];



$result = mysqli_query($koneksi, "INSERT INTO tb_siswa
VALUES('$id_siswa', '$nik', '$nama','$tpl','$tgl', '$jk', '$gd', '$alm', '$agm', '$sp', '$pkr', '$kwr')");
?>

<script language='javascript'>
    alert('DATA ANDA SUDAH TERSIMPAN');
    document.location='tampil_data_siswa.php';

</script>