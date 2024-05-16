<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { 
            background-color: white;
            margin: 0;
        }
        .login-container {
            width: 360px;
            padding: 20px;
            border: 2px solid #0047AB;
            border-radius: 10px;
            background-color: #F0FFFF;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-top: 50px; 
            margin-left: 50px;
        }
        .login-container h1 {
            color: #0047AB;
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input[type="text"], 
        .login-container input[type="password"], 
        .login-container input[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #0047AB;
            border-radius: 5px;
            box-sizing: border-box;
            color: #0047AB;
        }
        .login-container input[type="submit"] {
            background-color: #0047AB;
            color: white;
            border: none;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover {
            background-color: #7393B3;
        }
        .login-container a {
            color: #0047AB;
            text-decoration: none;
            text-align: center;
            display: block;
            margin-top: 20px;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="handleForm.php" method="POST">
            <h1>Login to Joemike's Canteen</h1>
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" value="Login" name="loginBtn">
            <a href="register.php"><b>Register</b></a>
        </form>
    </div>
</body>
</html>
