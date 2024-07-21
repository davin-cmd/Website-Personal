<?php 
include ('koneksi.php'); 

// Menampilkan data pekerjaan
$data_pekerjaan = mysqli_query($koneksi, "SELECT pekerjaan FROM tb_alumni GROUP BY pekerjaan");
$jumlah_data = mysqli_query($koneksi, "SELECT pekerjaan, COUNT(*) as count FROM tb_alumni GROUP BY pekerjaan");

// Array untuk menyimpan data
$pekerjaan = [];
$jumlah = [];

// Memasukkan data ke dalam array
while ($row = mysqli_fetch_assoc($data_pekerjaan)) {
    $pekerjaan[] = $row['pekerjaan'];
}

while ($row = mysqli_fetch_assoc($jumlah_data)) {
    $jumlah[] = $row['count'];
}

// Mengubah array menjadi format JSON
$pekerjaan_json = json_encode($pekerjaan);
$jumlah_json = json_encode($jumlah);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Data Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container {
            position: relative;
            height: 400px;
            width: 600px;
            margin: auto;
        }
        canvas {
            display: block;
            width: 100% !important;
            height: 100% !important;
        }
        a{
            display: block;
            margin-top: 50px;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success text-center">
                    <h3>Data Pekerjaan</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="chart-container">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <a href="index.php"><button>Back Home</button></a>

    <script>
    // Mengambil data dari PHP dan mengubahnya menjadi array JavaScript
    const pekerjaan = <?php echo $pekerjaan_json; ?>;
    const jumlah = <?php echo $jumlah_json; ?>;
    
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: pekerjaan, // Label untuk sumbu x
            datasets: [{
                label: '',
                data: jumlah, // Data untuk sumbu y
                backgroundColor: [
                    '#B22222', '#8A2BE2', '#FFC914', '#7FFF00'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
</body>

</html>
