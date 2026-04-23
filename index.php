<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #fff;
            padding: 30px;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-weight: 600;
            color: #2c3e50;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccd1d9;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background: #2980b9;
        }

        .error {
            margin-top: 10px;
            color: #e74c3c;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login Sistem</h2>

    <form action="login_process.php" method="POST">

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Login</button>

        <?php if (isset($_GET['error'])): ?>
            <p class="error">Username atau password salah</p>
        <?php endif; ?>

    </form>
</div>

</body>
</html>