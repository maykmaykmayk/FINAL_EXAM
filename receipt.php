<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Page</title>
    <style>
        body {
            background-color: white; 
            margin-top: 50px; 
            margin-left: 50px;
        }
        .receipt {
            width: 300px;
            padding: 20px;
            border: 2px solid #0047AB;
            border-radius: 10px;
            background-color: #F0FFFF;
            text-align: center;
        }
        h1, h2, h3 {
            color: #0047AB; 
        }
        p {
            color: black; 
        }
    </style>
</head>
<body>
    <div class="receipt">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['order'], $_GET['q'], $_GET['c'])) {
            $order = $_GET["order"];
            $quantity = $_GET["q"];
            $cash = $_GET["c"];
            
            $prices = [
                "Pizza" => 120,
                "Salad" => 80,
                "Sandwhich" => 70,
                "Sushi" => 100,
                "Tacos" => 90,
            ];

            if (is_numeric($quantity) && is_numeric($cash)) {
                $totalCost = $prices[$order] * $quantity;
                
                if ($cash >= $totalCost) {
                    $change = $cash - $totalCost;
                    $username = $_SESSION['username'] ?? '';
                    echo "<h1>Thank you" . ($username ? " $username" : "") . " for ordering!</h1>";
                    echo "<h2>Your Receipt:</h2>";
                    echo "<p>Total cost: $totalCost</p>";
                    echo "<p>Cash: $cash</p>";
                    echo "<p>Change: $change</p>";
                } else {
                    echo "<p>Not enough money :(</p>";
                }
            } else {
                echo "<p>Error: Quantity and Cash should only be NUMBERS.</p>";
            }
        }
        ?>
    </div>
</body>
</html>