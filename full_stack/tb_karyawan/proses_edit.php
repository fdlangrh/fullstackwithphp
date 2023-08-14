<?php
include "../koneksi/koneksi.php";

$id_karyawan = $_POST['id_karyawan'];
$nik = $_POST['nik'];
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



$query = mysqli_query($koneksi,"UPDATE tb_karyawan SET nik='$nik', 
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
WHERE id_karyawan='$id_karyawan' ");

?>

<script language='javascript'>
    alert('DATA ANDA SUDAH BERHASIL DI EDIT');
    document.location='tampil_data_karyawan.php';

</script>