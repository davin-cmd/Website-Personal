<?php
$servername = "localhost";
$username = "root"; // Sesuaikan dengan user database Anda
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "tracer_study";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$new_username = "admin";
$new_password = "adminpassword";

// Mengenkripsi password
$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$new_username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
