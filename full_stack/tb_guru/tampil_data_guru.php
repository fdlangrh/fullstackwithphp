<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPIL DATA guru</title>
    <link rel="stylesheet" href="mystlye.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body>
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK ANGKASA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dashboard</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
          </li>
        <form class="d-flex mt-3" role="search">
        <a href="logout.php" class="btn btn-lg btn-primary ">Logout</a>
        </form>
      </div>
    </div>
  </div>
</nav>


    <div class="tbl3">
        
                <br>
                <br>

                <center> <img src="Assets/foto1.png" width="150" height="150" alt="">
                    <h1> SISTEM INFORMASI SEKOLAH </h1>
                    <h2>SMK ANGKASA HUSEIN SASTRANEGARA BANDUNG</h2>
                </center>
                <br>
                <br>
                <br>

                <div class="card">
                    <div class="card-header text-white bg-primary">
                        <h5>Data Guru</h5>
                    </div>
                <div class="card-body">
               



                <div class="table-responsive">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                        <label></label>
                        <?php
                        $id_guru = "";
                        $nik_guru = "";
                        $nama = "";
                        if (isset($_POST['kolom'])) {

                            if ($_POST['kolom'] == "id_guru") {
                                $id = "selected";
                            } else if ($_POST['kolom'] == "nik_guru") {
                                $nik_guru = "selected";
                            } else {
                                $nama = "selected";
                            }
                        }
                        ?>
                        <div class="plc">
                            <div class="input-group mb-3 ">
                                <button type="button" class="btn btn-outline-secondary">Pencarian:</button>
                                <select class="form-select" aria-label="Default select example" name="kolom" required>
                                    <option value="">Pilih kategori</option>
                                    <option value="id_guru" <?php echo $id_guru; ?>>ID Guru</option>
                                    <option value="nik_guru" <?php echo $nik_guru; ?>>NIK</option>
                                    <option value="nama" <?php echo $nama; ?>>Nama Guru</option>
                                </select>

                                <input type="text" class="form-control" placeholder="Cari Data"
                                    aria-label="Tulis Data Guru" aria-describedby="addon-wrapping" name="kata kunci"
                                    required />
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input type="submit" value="Cari" class="btn btn-primary " role="button">
                                    <a href="" class="btn btn-danger" role="button">Reset</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <!-- Awal Tambah Data -->    
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="bi bi-person-plus"></i> Tambah Data
                </button>

                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title bg-primary text-white" id="exampleModalLongTitle">Tambah Data Guru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php
                                include "../koneksi/koneksi.php";
                                ?>
                                <form action="form_guru.php" method="post">

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col">
                                                <label for="id" class="form-label">ID Guru</label>
                                                <input type="text" class="form-control" name="id_guru" id="id">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="nik_guru" class="form-label">nik_guru</label>
                                                <input type="text" class="form-control" name="nik_guru" id="nik_guru">
                                            </div>
                                        </div>
<br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="id" class="form-label">Nama Guru</label>
                                                <input type="text" class="form-control" name="nama" id="id">
                                            </div>
                                        </div>
<br>
                                        <div class="row">
                                            <div class="col">
                                                <label for="id" class="form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" id="id">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="" class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir" id="
                                                ">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row mb-3">
                                            <div class="col">

                                                <label for="id" class="form-label fw-bolder">Jenis Kelamin:</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="Jenis_kelamin" id="jk" value="L">
                                                <label for="" class="form-check-label">Laki-Laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="Jenis_kelamin" id="jk" value="P">
                                                <label for="" class="form-check-label">Perempuan</label>
                                                </div>
                                            </div>
                                            </div>
                                        
                                                <div class="col">

                                                <label for="id" class="form-label fw-bolder">Golongan Darah:</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="golongan_darah" id="jk" value="a">
                                                    <label for="" class="form-check-label">A</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="golongan_darah" id="jk" value="b">
                                                    <label for="" class="form-check-label">B</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="golongan_darah" id="jk" value="ab">
                                                    <label for="" class="form-check-label">AB</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="golongan_darah" id="jk" value="o">
                                                    <label for="" class="form-check-label">O</label>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                       
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <label for="id" class="form-label">Alamat Guru:</label>
                                                <textarea class="form-control" name="alamat" id="id"
                                                    rows="4"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mb-3">
                                            <div class="col">

                                                <label for="id" class="form-label fw-bolder">Agama:</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="agama" id="jk" value="islam">
                                                <label for="" class="form-check-label">islam</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="agama" id="jk" value="buddha">
                                                <label for="" class="form-check-label">buddha</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="agama" id="jk" value="kristen">
                                                <label for="" class="form-check-label">kristen</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="agama" id="jk" value="hindu">
                                                <label for="" class="form-check-label">hindu</label>
                                                </div>
                                            </div>
                                            </div>
                                        
                                                <div class="col">
                                                <label for="id" class="form-label fw-bolder">Status Perkawinan:</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="status_perkawinan" id="jk" value="menikah">
                                                    <label for="" class="form-check-label">Menikah</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="status_perkawinan" id="jk" value="belum menikah">
                                                    <label for="" class="form-check-label">Belum Menikah</label>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        <br>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="id" class="form-label fw-bolder">Pekerjaan:</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="pekerjaan" id="jk" value="bekerja">
                                                <label for="" class="form-check-label">Bekerja</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="pekerjaan" id="jk" value="belum bekerja">
                                                <label for="" class="form-check-label">Belum Bekerja</label>
                                            </div>
                                            </div>
                                            </div>
                                        
                                                <div class="col">
                                                <label for="id" class="form-label fw-bolder">kewarganegaraan:</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="kewarganegaraan" id="jk" value="wna">
                                                    <label for="" class="form-check-label">WNA</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="kewarganegaraan" id="jk" value="wni">
                                                    <label for="" class="form-check-label">WNI</label>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                            <!-- Akhir Tambah Data -->    
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <a href="tampil_data_guru.php">kembali</a>
                                <button type="submit" value="simpan" class="btn btn-primary">Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>



                <br>
                <br>
                <div class="">
                    <table border="1" class="table table-hover table table-bordered">
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>NIK</th>
                            <th>NAMA GURU</th>
                            <th>TEMPAT LAHIR</th>
                            <th>TANGGAL LAHIR</th>
                            <th>JK</th>
                            <th>GOLONGAN DARAH</th>
                            <th>ALAMAT</th>
                            <th>AGAMA</th>
                            <th>STATUS PERKAWINAN</th>
                            <th>PEKERJAAN</th>
                            <th>WARGA</th>
                            <th>OPSI</th>
                        </tr>
                        <?php
                        include "../koneksi/koneksi.php";
                        if (isset($_POST['kata_kunci'])) {
                            $kata_kunci = trim($_POST['kata_kunci']);

                            $kolom = "";
                            if ($_POST['kolom'] == 'id_guru') {
                                $kolom = "id_guru";

                            } else if ($_POST['kolom'] == 'nik_guru') {
                                $kolom = "nik_guru";
                            } else {
                                $kolom = "nama";
                            }
                            $sql = "select * from tb_guru where $kolom like '%" . $kata_kunci . "%' order by id_guru asc";
                        } else {
                            $sql = "select * from tb_guru order by id_guru asc";
                        }
                        $query = mysqli_query($koneksi, $sql);
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $no++; ?>
                                </td>
                                <td>
                                    <?php echo $data['id_guru']; ?>
                                </td>
                                <td>
                                    <?php echo $data['nik_guru']; ?>
                                </td>
                                <td>
                                    <?php echo $data['nama']; ?>
                                </td>
                                <td>
                                    <?php echo $data['tempat_lahir']; ?>
                                </td>
                                <td>
                                    <?php echo $data['tanggal_lahir']; ?>
                                </td>
                                <td>
                                    <?php echo $data['Jenis_kelamin']; ?>
                                </td>
                                <td>
                                    <?php echo $data['golongan_darah']; ?>
                                </td>
                                <td>
                                    <?php echo $data['alamat']; ?>
                                </td>
                                <td>
                                    <?php echo $data['agama']; ?>
                                </td>
                                <td>
                                    <?php echo $data['status_perkawinan']; ?>
                                </td>
                                <td>
                                    <?php echo $data['pekerjaan']; ?>
                                </td>
                                <td>
                                    <?php echo $data['kewarganegaraan']; ?>
                                </td>
                                <td>


                                    <!-- Awal Edit Data -->
                                    <a class="btn btn-primary" href="#" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropedit<?php echo $data['id_guru']; ?>">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <div class="modal fade" id="staticBackdropedit<?php echo $data['id_guru']; ?>"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title bg-primary " id="exampleModalLongTitle">Edit Data
                                                        guru</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="proses_edit.php" method="post">

                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="id" class="form-label">ID guru:</label>
                                                                    <input type="hidden" name="id_guru"
                                                                        class="form-control"
                                                                        value="<?php echo $data['id_guru'] ?>">
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="nik_guru" class="form-label">nik_guru:</label>
                                                                    <input type="text" name="nik_guru" class="form-control"
                                                                        value="<?php echo $data['nik_guru'] ?>"></input>
                                                                </div>
                                                            </div>
<br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="id" class="form-label">Nama guru:</label>
                                                                    <input type="text" name="nama" class="form-control"
                                                                        value="<?php echo $data['nama'] ?>">
                                                                </div>
                                                            </div>
<br>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="id" class="form-label">Tempat Lahir:</label>
                                                                    <input type="text" name="tempat_lahir"
                                                                        class="form-control"
                                                                        value="<?php echo $data['tempat_lahir'] ?>">
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="nik" class="form-label">Tanggal
                                                                        Lahir:</label>
                                                                    <input type="date" name="tanggal_lahir"
                                                                        class="form-control"
                                                                        value="<?php echo $data['tanggal_lahir'] ?>">
                                                                </div>
                                                            </div>
                                                            <br>

                                                            <div class="row mb-3">
                                                         <div class="col">

                                                          <label for="id" class="form-label fw-bolder">Jenis Kelamin:</label>
                                                      <div class="mb-3">
                                                          <div class="form-check form-check-inline">
                                                          <input type="radio" class="form-check-input" name="Jenis_kelamin" id="jk" value="L" <?php
                                                                              if ($data['Jenis_kelamin'] == 'L')
                                                                                  echo 'checked' ?>>
                                                          <label for="" class="form-check-label">Laki-Laki</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                          <input type="radio" class="form-check-input" name="Jenis_kelamin" id="jk" value="P" <?php
                                                                              if ($data['Jenis_kelamin'] == 'P')
                                                                                  echo 'checked' ?>>
                                                          <label for="" class="form-check-label">Perempuan</label>
                                                          </div>
                                                      </div>
                                                      </div>
                                        
                                                <div class="col">

                                                <label for="id" class="form-label fw-bolder">Golongan Darah:</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="golongan_darah" id="jk" value="a" <?php if ($data['golongan_darah'] == 'a')
                                                                        echo 'checked' ?>>
                                                    <label for="" class="form-check-label">A</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="golongan_darah" id="jk" value="b" <?php if ($data['golongan_darah'] == 'b')
                                                                        echo 'checked' ?>>
                                                    <label for="" class="form-check-label">B</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="golongan_darah" id="jk" value="ab" <?php if ($data['golongan_darah'] == 'ab')
                                                                        echo 'checked' ?>>
                                                    <label for="" class="form-check-label">AB</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="golongan_darah" id="jk" value="o" <?php if ($data['golongan_darah'] == 'o')
                                                                        echo 'checked' ?>>
                                                    <label for="" class="form-check-label">O</label>
                                                </div>
                                            </div>
                                            </div>
                                          </div>

                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="nik" class="form-label">Alamat:</label>
                                                                        <textarea type="text-area" rows="4" name="alamat"
                                                                            class="form-control"><?php echo $data['alamat'] ?></textarea>
                                                                </div>
                                                            </div>

<br>
                                            <div class="row mb-3">
                                                <div class="col">
                                                <label for="id" class="form-label fw-bolder">Agama:</label>
                                                 <div class="mb-3">
                                                     <div class="form-check form-check-inline">
                                                        <input type="radio" class="form-check-input" name="agama" id="jk" value="islam" <?php
                                                                    if ($data['agama'] == 'islam')
                                                                        echo 'checked' ?>>
                                                        <label for="" class="form-check-label">islam</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                     <input type="radio" class="form-check-input" name="agama" id="jk" value="buddha" <?php
                                                                    if ($data['agama'] == 'buddha')
                                                                        echo 'checked' ?>>
                                                     <label for="" class="form-check-label">buddha</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="agama" id="jk" value="kristen" <?php
                                                                    if ($data['agama'] == 'kristen')
                                                                        echo 'checked' ?>>
                                                    <label for="" class="form-check-label">kristen</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                        <input type="radio" class="form-check-input" name="agama" id="jk" value="hindu" <?php
                                                                    if ($data['agama'] == 'hindu')
                                                                        echo 'checked' ?>>
                                                        <label for="" class="form-check-label">hindu</label>
                                                </div>
                                            </div>
                                            </div>
                                        
                                                <div class="col">
                                                <label for="id" class="form-label fw-bolder">Status Perkawinan:</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="status_perkawinan" id="jk" value="menikah" <?php
                                                                    if ($data['status_perkawinan'] == 'menikah')
                                                                        echo 'checked' ?>>
                                                    <label for="" class="form-check-label">Menikah</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="status_perkawinan" id="jk" value="belum menikah" <?php
                                                                    if ($data['status_perkawinan'] == 'belum menikah')
                                                                        echo 'checked' ?>>
                                                    <label for="" class="form-check-label">Belum Menikah</label>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                                            
                                          <div class="row mb-3">
                                            <div class="col">
                                                <label for="id" class="form-label fw-bolder">Pekerjaan:</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="pekerjaan" id="jk" value="bekerja" <?php if ($data['pekerjaan'] == 'bekerja')
                                                                        echo 'checked' ?>>
                                                <label for="" class="form-check-label">Bekerja</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="pekerjaan" id="jk" value="belum bekerja" <?php if ($data['pekerjaan'] == 'belum bekerja')
                                                                        echo 'checked' ?>>
                                                <label for="" class="form-check-label">Belum Bekerja</label>
                                            </div>
                                            </div>
                                            </div>
                                        
                                                <div class="col">
                                                <label for="id" class="form-label fw-bolder">kewarganegaraan:</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="kewarganegaraan" id="jk" value="wna" <?php if ($data['kewarganegaraan'] == 'wna')
                                                                        echo 'checked' ?>>
                                                    <label for="" class="form-check-label">WNA</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="kewarganegaraan" id="jk" value="wni" <?php if ($data['kewarganegaraan'] == 'wni')
                                                                        echo 'checked' ?>>
                                                    <label for="" class="form-check-label">WNI</label>
                                                </div>
                                            </div>
                                            </div>
                                          </div>   
                                          <!-- Akhir Edit Data -->           
                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="tampil_data_guru.php">kembali</a>
                                                        <button type="submit" value="simpan" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>

                                                </form>
                                            </div>
                                        </div>
                        </div>
                    </div>




                    <!-- Proses Hapus -->
                    <a class="btn btn-danger" href="#" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrophapus<?php echo $data['id_guru']; ?>">
                    <i class="bi bi-trash3"></i>
                </a>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrophapus<?php echo $data['id_guru']; ?>" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="proses_hapus_guru.php" method="POST">
                                <input type="hidden" name="id_guru" value="<?php echo $data['id_guru']; ?>">
                                <div class="modal-body">
                                    <h5 class="text-center">Anda Yakin Ingin Menghapus Data Ini? <br>
                                        <span class="text-danger text-center">
                                            <?php echo $data['id_guru']; ?> -
                                            <?php echo $data['nama']; ?>
                                        </span>
                                    </h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-light" name="hapus">Iya</button>
                                    <button type="button" class="btn btn-outline-primary"
                                        data-bs-dismiss="modal">tidak</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                </td>
                </tr>
            <?php } ?>
            </table>
        </div>

        <div class="badge bg-light text-wrap " style="width: 10rem; color: black;">
            <p>TOTAL DATA :
                <?php echo mysqli_num_rows($query) ?>
            </p>
        </div>
    </div>

    </div>
</div>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="tampil_data_guru.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">© 2023 Company, Inc</p>
        </footer>
    </div>
</body>

</html>