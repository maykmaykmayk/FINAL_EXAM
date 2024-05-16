<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background-color: white;
            margin-top: 50px; 
            margin-left: 50px; 
        }

        form {
            width: 360px;
            padding: 20px;
            border: 2px solid #0047AB; 
            border-radius: 10px;
            background-color: #F0FFFF;
            margin: 20px; 
        }

        input[type="text"], input[type="password"], input[type="submit"] {
            width: 97%;
            padding: 7px;
            margin: 5px 0;
            border: 1px solid #0047AB; 
            background-color: #FFFBF5;
            color: #0047AB; 
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #0047AB; 
            color: #FFFBF5; 
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0047AB; 
        }

        a {
            color: #0047AB;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
        }

        .register-heading {
            color: #0047AB;
        }
    </style>
</head>
<body>
    <form action="handleForm.php" method="POST">
        <h1 class="register-heading">Please Register Here</h1>
        <div class="fields">
            <p><input type="text" placeholder="Username" name="username"></p>
            <p><input type="password" placeholder="Password" name="password"></p>
            <p><input type="submit" value="Register" name="regBtn"></p>
        </div>
    </form>
</body>
</html>