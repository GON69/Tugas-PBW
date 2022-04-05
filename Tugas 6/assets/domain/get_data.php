<?php
include('../data/connection_remote_database.php.php');
$query = "SELECT krs.id,mahasiswa.nama,matakuliah.nama_mk,matakuliah.jumlah_sks FROM krs JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm JOIN matakuliah ON krs.matakuliah_kodemk = matakuliah.kodemk";

$run = mysqli_query($connection,$query);
