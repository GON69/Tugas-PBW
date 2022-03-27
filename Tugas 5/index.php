<?php
$asalBandara = array(
    "Sultan Iskandar Muda (BTJ)" => 60000,
    "Mahmud Badaruddin II (PLM)" => 20000,
    "Halim Perdanakusuma (HLP)" => 30000,
    "Husein Sastranegara (BDO)" => 40000,
    "Ahmad Yani (SRG)" => 40000,
    "Adisucipto (JOG)" => 50000,
    "Ngurai Rai (DPS)" => 85000,
    "Hasanuddin (UPG)" => 70000,
    "Inanwatan (INX)" => 90000
);
$tujuanBandara = array(
    "Ngurai Rai (DPS)" => 85000,
    "Hasanuddin (UPG)" => 70000,
    "Inanwatan (INX)" => 90000,
    "Sultan Iskandar Muda (BTJ)" => 60000
);

function getPajakAsal($asalBandara, $tujuan)
{
    $pajak = $asalBandara[$tujuan];
    return $pajak;
}
function getPajakTujuan($tujuanBandara, $tujuan)
{
    $pajak = $tujuanBandara[$tujuan];
    return $pajak;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Indo Airlines</title>
</head>

<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-md">
    <a class="navbar-brand" href="index.php">
      <img src="assets/img/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Welcome to Indo Airlines
    </a>
  </div>
</nav>
    <div class="container">
        <div class="row mt-5">
            
        </div>
        <div class="header">
            <h1>Flight Registration</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="maskapai" class="form-label">Airlines</label>
                        <input type="text" class="form-control" id="maskapai" name="maskapai">
                    </div>
                    <label for="asal" class="form-label">From</label>
                    <select class="form-select mb-3" name="asal" id="asal">
                        <option selected>Select Airport</option>
                        <?php foreach ($asalBandara as $asal => $pajak) : ?>
                            <option value="<?= $asal ?>"><?= $asal; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="tujuan" class="form-label">Destination</label>
                    <select class="form-select mb-3" name="tujuan" id="tujuan">
                        <option selected>Select Airport</option>
                        <?php foreach ($tujuanBandara as $tujuan => $pajak) : ?>
                            <option value="<?= $tujuan ?>"><?= $tujuan; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Price</label>
                        <input type="text" class="form-control" name="harga" id="harga">
                    </div>
                    <button class="btn btn-success" name="submit">Register</button>
                </form>
            </div>
        </div>
        <br>
        <div class="header">
            <h1>List of Tickets</h1>
        </div>
        <?php
        $file = 'assets/data/maskapai.json';
        $dataPenerbangan = array();

        $file_json = file_get_contents($file);

        $dataPenerbangan = json_decode($file_json, true);

        if (isset($_POST['submit'])) {
            $pajak = getPajakAsal($asalBandara, $_POST['asal']) + getPajakTujuan($tujuanBandara, $_POST['tujuan']);
            $total = $pajak + $_POST['harga'];

            $inputUser = array(
                "Maskapai" => $_POST['maskapai'],
                "Asal_penerbangan" => $_POST['asal'],
                "tujuan_penerbangan" => $_POST['tujuan'],
                "Harga_tiket" => $_POST['harga'],
                "Pajak" => $pajak,
                "Total_harga" => $total
            );

            array_push($dataPenerbangan, $inputUser);

            $data_json = json_encode($dataPenerbangan, JSON_PRETTY_PRINT);
            file_put_contents($file, $data_json);
        }

        ?>
    <div class="row">
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Airlines</th>
                <th scope="col">From</th>
                <th scope="col">Destination</th>
                <th scope="col">Price</th>
                <th scope="col">Tax</th>
                <th scope="col">Total Price</th>
                </tr>
        </thead>
            <tbody>
                <?php foreach ($dataPenerbangan as $data => $value) : ?>
                     <tr>
                        <td><?= $dataPenerbangan[$data]['Maskapai']; ?></td>
                        <td><?= $dataPenerbangan[$data]['Asal_penerbangan']; ?></td>
                        <td><?= $dataPenerbangan[$data]['tujuan_penerbangan']; ?></td>
                        <td><?= $dataPenerbangan[$data]['Harga_tiket']; ?></td>
                        <td><?= $dataPenerbangan[$data]['Pajak']; ?></td>
                        <td><?= $dataPenerbangan[$data]['Total_harga']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>