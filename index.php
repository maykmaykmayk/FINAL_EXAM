<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
} 

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order_Page</title>
    <style>
        body {
            background-color:white; 
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

        ul {
            border: 1px solid #0047AB;
            padding: 10px;
            background-color: #F0FFFF;
            text-align: center;
            list-style-position: inside;
        }

        p:not(:last-child) {
            margin-bottom: 10px;
        }

        h1, h2, h3 {
            color: #0047AB; 
        }

        label {
            color: black; 
        }

        select, input[type="text"] {
            border: 1px solid black; 
            background-color: #F0FFFF;
            color: black; 
            padding: 5px;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #0047AB; 
            color: #FFFBF5; 
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0047AB; 
        }
    </style>
</head>
<body>
    <?php 
    $welcomeMessage = isset($_SESSION['username']) ? "Welcome " . $_SESSION['username'] . " to Joemike Pogi's Canteen" : "Welcome to Joemike Pogi's Canteen!";
    ?>

    
    <form action="receipt.php" method="GET">

        
        <h1><?php echo $welcomeMessage; ?></h1>
        <h2>MENU:</h2>
        <ul>
            <li>Pizza - 120 PHP</li>
            <li>Salad - 80 PHP</li>
            <li>Sandwhich - 70 PHP</li>
            <li>Sushi - 100 PHP</li>
            <li>Tacos - 90 PHP</li>
        </ul>
        <p>
            <label for="order">Please select your order:</label>
            <select name="order" id="order">
                <option value="Pizza">Pizza</option>
                <option value="Salad">Salad</option>
                <option value="Sandwhich">Sandwhich</option>
                <option value="Sushi">Sushi</option>
                <option value="Tacos">Tacos</option>
            </select>
        </p>
        <p><label for="q">Quantity: </label><input type="text" name="q" id="q"></p>
        <p><label for="c">Cash: </label><input type="text" name="c" id="c"></p>

        <p>
            <input type="submit" value="Submit">
            <input type="submit" name="logout" value="Logout" formaction="login.php">
        </p>
    </form>
</body>
</html>
