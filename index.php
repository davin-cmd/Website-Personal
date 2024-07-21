<?php
    session_start();

    // Cek apakah user sudah login
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.html");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: dodgerblue;
            color: aliceblue;
            text-align: center;
        }
        h1{
            text-align: center;
    
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

/* body {
    line-height: 1.6;
} */

        nav {
            background: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 7px 13px;
            border-radius: 3px;
    /* transition: background 0.3s; */
        }

        nav ul li a:hover {
            background: #575757;
        }

        section {
            padding: 20px;
            margin: 20px 0;
        }

        section#home {
            background: #f4f4f4;
            padding: 50px;
            text-align: center;
            color: #333;
        }

        section#about, section#isi_data, section#data_alumni {
            background: #e2e2e2;
            padding: 50px;
            color: #333;
        }

        section h2 {
            margin-bottom: 10px;
            color: #333;
        }
        footer{
            color: black;
            background-color: dodgerblue;
            padding: 50px;
            color: #333;
        }

    </style>
</head>
<body>
    <h1>Tracer Study</h1>
    
<nav>
    <div class="logo"> <img src="https://www.bing.com/ck/a?!&&p=a65b6ac48e77b91bJmltdHM9MTcyMTI2MDgwMCZpZ3VpZD0zNmM4ZmZkNS0wYTlkLTYwZjMtMzFmMS1lZDhhMGJjYjYxMjYmaW5zaWQ9NTU1NQ&ptn=3&ver=2&hsh=3&fclid=36c8ffd5-0a9d-60f3-31f1-ed8a0bcb6126&u=a1L2ltYWdlcy9zZWFyY2g_cT1sb2dvJTIwcG9sbWFuJTIwYmFiZWwmRk9STT1JUUZSQkEmaWQ9RDQ0M0Y3RDcyNzcwMTQ5RDFGRTI0OTU4MzBGN0Q2MEJDOTE3MDY5Qg&ntb=1" alt=""> Web Tracer Study</div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="isi_data.php">Isi Data Alumni</a></li>
        <li><a href="data_alumni.php">Data Alumni</a></li>
    </ul>
</nav>

    <section id="home">
        <h1>Tracer Study POLMAN BABEL</h1>
        <p>Selamat datang di halaman Tracer Study Politeknik Manufaktur Negeri Bangka Belitung. 
            Tracer Study adalah survei yang dilakukan kepada alumni untuk mengumpulkan data terkait karir dan 
            perkembangan mereka setelah lulus. Informasi ini sangat penting untuk meningkatkan kualitas pendidikan 
            dan menyesuaikan kurikulum dengan kebutuhan industri.</p>
        <p>
            Kami mengundang semua alumni untuk berpartisipasi dalam Tracer Study ini. 
            Partisipasi Anda akan memberikan kontribusi berharga untuk kemajuan institusi dan generasi mendatang.
        </p>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>Information about us.</p>
    </section>

    <section id="isi_data">
        <h2>Isi Data Alumni</h2>
    
    </section>

    <section id="data_alumni">
        <h2>Data Alumni</h2>
        <p>Details of Our Data </p>
    </section>

</body>
<footer>
    <i>Created By @mdvnlkbry</i>
</footer>
</html>