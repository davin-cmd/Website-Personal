<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "tracer_study";

$koneksi = new mysqli($host, $username, $password, $database);
// $rs_data = mysqli_query($koneksi, $query_data) or die(mysqli_error($koneksi));
$data_pekerjaan = "SELECT pekerjaan, COUNT(*) as jumlah FROM tb_alumni GROUP BY pekerjaan";
$jumlah_data = mysqli_query($koneksi, $data_pekerjaan);

$data = array();
while ($row = mysqli_fetch_assoc($jumlah_data)) {
    $data[$row['pekerjaan']] = $row['jumlah'];
}



?>