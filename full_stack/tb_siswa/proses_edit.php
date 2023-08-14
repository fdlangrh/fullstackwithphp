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



$query = mysqli_query($koneksi,"UPDATE tb_siswa SET nik='$nik', 
nama='$nama', 
tempat_lahir='$tpl',
 tanggal_lahir='$tgl',
 jenis_kelamin='$jk',
  golongan_darah='$gd', 
 alamat='$alm',
  agama='$agm', 
  status_perkawinan='$sp', 
statuspr='$pkr',
kewarganegaraan='$kwr' 
WHERE id_siswa='$id_siswa' ");

?>

<script language='javascript'>
    alert('DATA ANDA SUDAH BERHASIL DI EDIT');
    document.location='tampil_data_siswa.php';

</script>