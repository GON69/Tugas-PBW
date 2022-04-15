<?php

require_once "koneksi.php";

if ($_POST["submit"]) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $db->prepare(
        "SELECT email FROM user WHERE email=:email"
    );

    $stmt->execute([
        ":email" => $email,
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (empty($user)) {
        $sql =
            "INSERT INTO user (nama, email, password) VALUES (:nama, :email, :password)";
        $stmt = $db->prepare($sql);

        $saved = $stmt->execute([
            ":nama" => $nama,
            ":email" => $email,
            ":password" => $password,
        ]);
        if ($saved) {
            header("Location: login.php");
        }
    } else {
        session_start();
        $_SESSION["error"] = "Email telah digunakan.";

        header("Location: register.php");
    }
} else {
    echo "Error";
}

?>