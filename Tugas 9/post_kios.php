<?php

include("koneksi.php");

$nama_barang = isset( $_POST["nama"]) ? $_POST["nama"] : "";
$stok = isset($_POST["stok"]) ? $_POST["stok"] : "";
$harga = isset( $_POST["harga"])  ? $_POST["harga"] : "";

$sql = "INSERT INTO produk (nama,stok,harga) VALUES ('".$nama_barang."','".$stok."','".$harga."');";

$query = mysqli_query($conn,$sql);

if($query){
    $msg = "Tambah Barang Berhasil";
}else{
    $msg = "Tambah barang gagal";
}

$respone = array(
    'status' => "OK",
    'msg' => $msg
);

echo json_encode($respone,JSON_PRETTY_PRINT);
?>