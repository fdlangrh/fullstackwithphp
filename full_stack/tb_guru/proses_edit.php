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



$query = mysqli_query($koneksi,"UPDATE tb_guru SET nik_guru='$nik', 
nama='$nama', 
tempat_lahir='$tpl',
 tanggal_lahir='$tgl',
 jenis_kelamin='$jk',
  golongan_darah='$gd', 
 alamat='$alm',
  agama='$agm', 
  status_perkawinan='$sp', 
  pekerjaan='$pkr',
kewarganegaraan='$kwr' 
WHERE id_guru='$id_guru' ");

?>

<script language='javascript'>
    alert('DATA ANDA SUDAH BERHASIL DI EDIT');
    document.location='tampil_data_guru.php';

</script>