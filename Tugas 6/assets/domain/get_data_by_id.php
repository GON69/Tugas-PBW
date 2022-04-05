<?php
include('../data/connection_remote_database.php.php');
$id = $_GET['id'];

$sql = "SELECT * FROM krs WHERE id=$id";
$query = mysqli_query($connection, $sql);
$data = mysqli_fetch_assoc($query);
