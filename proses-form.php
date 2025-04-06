<?php
// Cek apakah form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form menggunakan operator assignment
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validasi menggunakan if-else
    if (empty($name) || empty($email)) {
        echo "Nama dan Email harus diisi.";
        exit;
    }

    //Tampilkan data yang diinput
    echo "<h1>Data diterima</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>"; 
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "Tidak ada data yang diinput";
}
?>