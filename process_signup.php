<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Simpan data ke database atau file, sesuai preferensi Anda.
    // Contoh: simpan data ke dalam file CSV.
    $data = "$name,$username,$password\n";
    file_put_contents("user_data.csv", $data, FILE_APPEND);

    header("Location: index.html");
    exit();
}
?>
