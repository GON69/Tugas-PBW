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

        <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo  $message;
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
        ?>

</div>
      </section>

<section class='landing'>
    <div class='row justify-content-center'>
        <div class='col-10 panel justify-content-center'>
        <h1>Data Mahasiswa</h1>
        <h3>Universitas Teyvat</h3>
            <div class="row">
                <div class="col justify-content-center">
                    <div class='tombol'>
                    <a href="input.php"type="button" class="btn btn-primary">Input Data</a>
                    <a href="#tabel"type="button" class="btn btn-success">Lihat KRS</a>
                    </div>
                 </div>
                </div>
        </div>
        </div>
    </div>
</div>
</div>
</section>

<section class="tampil-data" id="tabel">
<div class="container tampil-data">
  <h2 style="text-align:center;font-weight:bolder;">DATA KRS MAHASISWA TEYVAT</h2>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped" id='table-data'>
                        <thead>
                            <tr>
                                <th scope="col" style='background-color:yellow;'>No</th>
                                <th scope="col" style='background-color:aqua;'>Nama Lengkap</th>
                                <th scope="col" style='background-color:lawngreen;'>Mata Kuliah</th>
                                <th scope="col" style='background-color:palevioletred;'>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!isset($query)) {
                                echo "Belum ada yang mengisi KRS";
                            } else {
                                while ($row = mysqli_fetch_assoc($run)){
                                    echo '<tr>
                                    <td>' . $row['id'] . '</td>
                                    <td>' . $row['nama'] . '</td>
                                    <td>' . $row['nama_mk'] . '</td>
                                    <td>' . "<span style='color:palevioletred;font-weight:bolder;'>".$row['nama']."</span>". ' Mengambil Mata Kuliah ' . "<span style='color:palevioletred;font-weight:bolder;'>" . $row['nama_mk'] ."</span>". " ( ".$row['jumlah_sks'] . ' SKS )' . '</td> 
                                    </tr>';
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>