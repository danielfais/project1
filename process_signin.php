<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Anda perlu memeriksa data pengguna dengan data yang tersimpan.
    // Contoh: membaca data dari file CSV.
    $user_data = file("user_data.csv", FILE_IGNORE_NEW_LINES);
    foreach ($user_data as $user) {
        list($name, $stored_username, $stored_password) = explode(",", $user);
        if ($stored_username === $username && password_verify($password, $stored_password)) {
            header("Location: content.html");
            exit();
        }
    }

    // Jika tidak ada kesesuaian, Anda dapat menampilkan pesan kesalahan.
    echo "Username atau password salah.";
}
?>
