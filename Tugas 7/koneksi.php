<?php
session_start();

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "dbelearn";

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
} catch (PDOException $exception) {
    die("Error: " . $exception->getMessage());
}
