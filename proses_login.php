<?php
session_start();
include 'db_connection.php';

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa apakah username dan password cocok
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        // Jika login sukses, redirect atau tampilkan halaman utama
        header("Location: index.php");
        exit;
    } else {
        // Jika password salah, tampilkan pesan error
        $_SESSION['error'] = "Password salah!";
        header("Location: login.php");
        exit;
    }
} else {
    // Jika username tidak ditemukan, tampilkan pesan error
    $_SESSION['error'] = "Username tidak ditemukan!";
    header("Location: login.php");
    exit;
}

$stmt->close();
$conn->close();
?>
