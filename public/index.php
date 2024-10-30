<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register Form</title>
    <!-- Boxicons CDN -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        /* CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f0f2f5;
        }

        .login-container {
            display: flex;
            background-color: #fff;
            width: 700px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
        }

        .login-box {
            flex: 1;
            padding: 40px;
        }

        .login-box h2 {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            padding-left: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .input-box label {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 14px;
            color: #999;
            pointer-events: none;
        }

        .input-box i {
            position: absolute;
            top: 12px;
            left: 5px;
            color: #333;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-btn:hover {
            background-color: #555;
        }

        p {
            text-align: center;
            margin-top: 10px;
        }

        p a {
            color: #333;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        .welcome-text {
            background-color: #000;
            color: #fff;
            padding: 40px;
            text-align: center;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .welcome-text h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .welcome-text p {
            font-size: 14px;
        }

        .logo-container img {
            width: 100px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <div class="input-box">
                <input type="text" required>
                <label>Username</label>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" required>
                <label>Password</label>
                <i class="bx bxs-lock-alt"></i>
            </div>
            <button class="login-btn">Login</button>
            <p>Don’t have an account? <a href="#">Sign Up</a></p>
        </div>
        <div class="welcome-text">
            <!-- Laravel Logo -->
            <div class="logo-container">
                <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo">
            </div>
            <h2>WELCOME BACK!</h2>
            <p>Johan Sebastian Beltran Yañez, Frameworks, 4 semestre</p>
        </div>
    </div>
</body>
</html>

