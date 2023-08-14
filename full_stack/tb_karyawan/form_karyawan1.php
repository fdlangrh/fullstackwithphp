<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA karyawan</title>
    <link rel="stylesheet" href="mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    include "../koneksi/koneksi.php";
    ?>
    <form action="form_karyawan.php" method="post">
        <h1 class="kk">Tambah Data karyawan</h1>
        
        <table>
            <tr>
                <td>ID karyawan</td>
                <td>:</td>
                <td><input type="text" name="id_karyawan" id="id"></td>
            </tr>

            <tr>
                <td>NIK_karyawan</td>
                <td>:</td>
                <td><input type="text" name="nik" id="id"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nm"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" id="id"></td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" id="nm"></td>
            </tr>
            <tr>
                <td>jenis_kelamin</td>
                <td>:</td>
                <td><input type="radio" name="Jenis_kelamin" id="jk" value="L">Laki-Laki
                    <input type="radio" name="Jenis_kelamin" id="jk" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>golongan_darah</td>
                <td>:</td>
                <td><input type="radio" name="golongan_darah" id="jk" value="a">A
                    <input type="radio" name="golongan_darah" id="jk" value="b">B
                    <input type="radio" name="golongan_darah" id="jk" value="ab">AB
                    <input type="radio" name="golongan_darah" id="jk" value="o">O
                </td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="Alamat" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>agama</td>
                <td>:</td>
                <td><input type="radio" name="agama" value="islam">Islam
                    <input type="radio" name="agama" value="kristen">Kristen
                    <input type="radio" name="agama" value="buddha">Budhha
                    <input type="radio" name="agama" value="hindu">HIndu
                </td>
            </tr>
            <tr>
                <td>status_perkawinan</td>
                <td>:</td>
                <td><input type="radio" name="status_perkawinan" value="menikah">Menikah
                    <input type="radio" name="status_perkawinan" value="belum menikah">Belum Menikah
                </td>
            </tr>
            <tr>
                <td>pekerjaan</td>
                <td>:</td>
                <td><input type="radio" name="pekerjaan" value="bekerja">bekerja
                    <input type="radio" name="pekerjaan" value="belum bekerja">belum bekerja
                </td>
            </tr>
            <tr>
                <td>kewarganegaraan</td>
                <td>:</td>
                <td><input type="radio" name="kewarganegaraan" value="wna">WNA
                    <input type="radio" name="kewarganegaraan" value="wni">WNI
                </td>
            </tr>
            <tr>
                <td> <input type="submit" value="simpan"></td>
                <td><a href="tampil_data_karyawan.php">kembali</a></td>
            </tr>
        </table>
        </form>
</body>

</html>