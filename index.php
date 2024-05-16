<?php 
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: login.php');
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
            background-image: url(http://s01.riotpixels.net/data/f1/ab/f1ab9aa5-e288-4b3f-ad3c-7b287fc5d602.jpg.480p.jpg/wallpaper.valorant.853x480.2020-10-09.78.jpg); 
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

        form {
            width: 360px;
            padding: 20px;
            border: 2px solid #BD3944; 
            border-radius: 10px;
            background-color: #FFFBF5;
            margin: 20px; 
        }

        ul {
            border: 1px solid #BD3944;
            padding: 10px;
            background-color: #FFFBF5;
            text-align: center;
            list-style-position: inside;
        }

        p:not(:last-child) {
            margin-bottom: 10px;
        }

        h1, h2, h3 {
            color: #FD4556; 
        }

        label {
            color: #53212B; 
        }

        select, input[type="text"] {
            border: 1px solid #53212B; 
            background-color: #FFFBF5;
            color: #53212B; 
            padding: 5px;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #BD3944; 
            color: #FFFBF5; 
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #FD4556; /* Hover color */
        }
    </style>
</head>
<body>
    <?php 
    $welcomeMessage = isset($_SESSION['username']) ? "Welcome " . $_SESSION['username'] . " to Valorant Points Gift Card Shop!" : "Welcome to Valorant Points Gift Card Shop!";
    ?>

    <!-- Redirect to receipt page -->
    <form action="receipt.php" method="GET">

        <!-- Input field -->
        <h1><?php echo $welcomeMessage; ?></h1>
        <h2>VP Options:</h2>
        <ul>
            <li>2100 VP - 849 PHP</li>
            <li>3600 VP - 1,399 PHP</li>
            <li>5800 VP - 2,000 PHP</li>
            <li>7500 VP - 2,799 PHP</li>
            <li>12500 VP - 4,000 PHP</li>
        </ul>
        <p>
            <label for="order">Select Recharge Gift Card Points:</label>
            <select name="order" id="order">
                <option value="2100 VP">2100 VP</option>
                <option value="3600 VP">3600 VP</option>
                <option value="5800 VP">5800 VP</option>
                <option value="7500 VP">7500 VP</option>
                <option value="12500 VP">12500 VP</option>
            </select>
        </p>
        <p><label for="q">Quantity: </label><input type="text" name="q"></p>
        <p><label for="c">Cash: </label><input type="text" name="c"></p>

        <!-- Submit button -->
        <p><input type="submit" value="Submit"></p>
    </form>
</body>
</html>
