<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .register-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
        }
        .register-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .register-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .register-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .register-container button:hover {
            background-color: #0056b3;
        }
        .register-container .login-link {
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Register</h2>
        <form action="proses_register.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
        <a class="login-link" href="login.php">Sudah punya akun? Login</a>

        <?php
        session_start();
        if (isset($_SESSION['register_error'])) {
            echo '<div class="alert alert-danger" role="alert">';
            echo '<strong>' . $_SESSION['register_error'] . '</strong>';
            echo '</div>';
            unset($_SESSION['register_error']);
        }
        if (isset($_SESSION['register_success'])) {
            echo '<div class="alert alert-success" role="alert">';
            echo '<strong>' . $_SESSION['register_success'] . '</strong>';
            echo '</div>';
            unset($_SESSION['register_success']);
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNig7UQ6Bgrmj3Un8vKSzV+BdpfJb4uflYRZjiNeHgTtWv/8abtTE1Pi6jizoK2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-qBLGs2niS0lMwJ7LJ6sB3MGwbLZ5fsJ/r26ohdZ/Zghap0nu/9eH58/ujp6b68gx" crossorigin="anonymous"></script>
</body>
</html>
