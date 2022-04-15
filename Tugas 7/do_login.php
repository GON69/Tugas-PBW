<?php
require_once "koneksi.php";

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE email=:email";
    $stmt = $db->prepare($sql);

    $params = [
        ":email" => $email,
    ];

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user["password"])) {
            session_start();
            $_SESSION["user"] = $user;
            header("Location: index.php");
        } else {
            session_start();
            $_SESSION["error"] = "Email atau password salah.";

            header("Location: login.php");
        }
    } else {
        session_start();
        $_SESSION["error"] = "Email atau password salah.";

        header("Location: login.php");
    }
} else {
    echo "error";
}