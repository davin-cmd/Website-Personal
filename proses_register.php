<?php
session_start();
include 'db_connection.php';

// Ambil data dari form
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Mengenkripsi password

// Periksa apakah username sudah terdaftar
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Jika username sudah terdaftar, tampilkan pesan error
    $_SESSION['register_error'] = "Username sudah terdaftar!";
    header("Location: register.php");
    exit;
} else {
    // Jika username belum terdaftar, tambahkan ke tabel users
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $_SESSION['register_success'] = "Registrasi berhasil! Silakan login.";
    header("Location: login.php");
    exit;
}

$stmt->close();
$conn->close();
?>
