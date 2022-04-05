<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>KRS</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
<div class="container-md">
    <a class="navbar-brand" href="index.php">
      <img src="assets/img/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
       Universitas Teyvat
    </a>
  </div>
</nav>



<div class="container">
<form action="assets/domain/post_data.php" method="POST" enctype="multipart/form-data">
<div class="row d-flex justify-content-center mb-5 login-panel">
    <h3>Input Data Mahasiswa</h3>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" class="form-control" id="npm" name="npm">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select mb-3" name="jurusan" id="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                          </select>
                        </div>
                        <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" placeholder="Alamat Lengkap" name='alamat' id="alamat" style="height: 100px"></textarea>
                        </div>
                        <hr></hr>
                        <div class="mb-3">
                        <label for="mk" class="form-label">Mata Kuliah Yang Diambil</label>
                        <select class="form-select mb-3" name="mk" id="mk">
                            <option value='A1'>Basis Data</option>
                            <option value='A2'>Pemrograman Berbasis Web</option>
                            <option value='A3'>Algoritma Dan Struktur Data</option>
                            <option value='A4'>Kajian Jurnal Informatika</option>
                          </select>
                        </div>
                        <div class="mb-3">
                        <label for="sks" class="form-label">Jumlah SKS</label>
                        <select class="form-select mb-3" name="sks" id="sks">
                            <option value='3'>3</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="register">Input Data</button>
                    </div>
                </div>
                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>