<!DOCTYPE html>
<html>
<head>
    <title>Form Data Alumni</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: dodgerblue;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }
        .container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .container input[type="text"],
        .container input[type="number"],
        .container input[type="email"],
        .container select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .container input[type="radio"]{
            width: 100%;
            padding: 5px;
        }
        .container input[type="submit"] {
            width: 100%;
            padding: 5px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Data Alumni</h2>
        <form action="" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="npm">NPM:</label>
            <input type="number" id="npm" name="npm" required>
            
            <label for="tahun_lulus">Tahun Lulus:</label>
            <input type="number" id="tahun_lulus" name="tahun_lulus" required>
            
            <label for="prodi">Prodi:</label>
            <input type="text" id="prodi" name="prodi" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="pekerjaan">Pekerjaan:</label>
            <select name="pekerjaan" id="pekerjaan">
                <option value=""></option>
                <option value="irt">Ibu Rumah Tangga</option>
                <option value="bekerja">Bekerja</option>
                <option value="wirausaha">Wirausaha</option>
                <option value="kuliah">Lanjut Kuliah</option>
            </select>

            <label name="jenis_kelamin">Jenis Kelamin:</label>
            <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
            <label for="laki_laki">Laki-laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
            <label for="perempuan">Perempuan</label>
            
            <a href="data_alumni.php"><input type="submit" value="Submit" name="proses"></a>
        </form>
    </div>
</body>
</html>

<?php 
include "koneksi.php"; 

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into tb_alumni set
    nama = '$_POST[nama]',
    npm = '$_POST[npm]',
    tahun_lulus = '$_POST[tahun_lulus]',
    prodi = '$_POST[prodi]',
    email = '$_POST[email]',
    pekerjaan = '$_POST[pekerjaan]',
    jenis_kelamin = '$_POST[jenis_kelamin]'");

    echo "Data Disimpan";

    header("Location: data_alumni.php");
}



 ?>
