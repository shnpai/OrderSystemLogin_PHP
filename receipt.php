<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt_Page</title>
    <style>
        body {
            background-image: url(http://s01.riotpixels.net/data/ac/82/ac824ef9-6bab-4be7-bd99-e67fcc07283a.jpg.480p.jpg/wallpaper.valorant.853x480.2020-06-13.50.jpg); 
            background-color: #000000; 
            background-size: cover;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.5); 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0; 
            padding: 0; 
        }

        .receipt {
            width: 300px;
            padding: 20px;
            border: 2px solid #BD3944;
            border-radius: 10px;
            background-color: #FFFBF5;
            text-align: center;
            margin: 20px; 
        }

        h1, h2, h3 {
            color: #FD4556; 
        }

        p {
            color: #53212B; 
        }
    </style>
</head>
<body>
    <div class="receipt">
        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Retrieve values from form
            $order = $_GET["order"];
            $quantity = $_GET["q"];
            $cash = $_GET["c"];

            // Defining Items Prices
            $prices = array(
                "2100 VP" => 849,
                "3600 VP" => 1399,
                "5800 VP" => 2000,
                "7500 VP" => 2799,
                "12500 VP" => 4000
            );

            // Check if quantity and cash are numeric
            if (!is_numeric($quantity) || !is_numeric($cash)) {
                echo "<p>Error: Quantity and cash must be filled and should be numeric.</p>";
            } else {
                // Calculate total cost
                $totalCost = $prices[$order] * $quantity;
                // Check if cash is sufficient
                if ($cash < $totalCost) {
                    echo "<p>Error: Insufficient cash.</p>";
                } else {
                    // Calculate Change
                    $change = $cash - $totalCost;

                    // Display personalized thank you message
                    if(isset($_SESSION['username'])) {
                        $username = $_SESSION['username'];
                        echo "<h1>Thank you $username for ordering!</h1>";
                    } else {
                        echo "<h1>Thank you for ordering!</h1>";
                    }

                    // Order Receipt Summary
                    echo "<h2>Your VP Gift Card Receipt:</h2>";
                    echo "<p>Total cost: $totalCost</p>";
                    echo "<p>Cash: $cash</p>";
                    echo "<p>Change: $change</p>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
