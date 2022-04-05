<?php
include('../data/connection_remote_database.php.php');

if (isset($_POST['register'])) {

    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $mk = $_POST['mk'];
    $sks = $_POST['sks'];

    $query = mysqli_query($connection, "INSERT into mahasiswa (npm,nama,jurusan,alamat) VALUES ('$npm','$nama','$jurusan','$alamat')");
    if ($query) {
        $query1 = mysqli_query($connection, "INSERT into krs (id,mahasiswa_npm,matakuliah_kodemk) VALUES ('','$npm','$mk')");
        $message = "Input Data Berhasil";
        $message = urlencode($messae);
        header("Location:../index.php?message={$message}");
    } else {
        $message = "Input Data Gagal, Isi seluruh data dengan benar";
        $message = urlencode($message);
        header("Location:../index.php?message={$message}");
    }
}
