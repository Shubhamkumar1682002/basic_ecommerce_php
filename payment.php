<?php
session_start();


if (isset($_POST['checkout'])) {
  
    unset($_SESSION['cart']);

    header("Location: thank_you.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Method</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 200px;
            padding: 6px 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            color: #999;
        }

        .success-message {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Payment Method</h2>

    <form method="POST" action="">
        <label for="cardholder">Cardholder Name</label>
        <input type="text" id="cardholder" name="cardholder" required>

        <label for="cardnumber">Card Number</label>
        <input type="text" id="cardnumber" name="cardnumber" required>

        <label for="expiry">Expiry Date</label>
        <input type="text" id="expiry" name="expiry" placeholder="MM/YYYY" required>

        <label for="cvv">CVV</label>
        <input type="number" id="cvv" name="cvv" required>

        <input type="submit" name="checkout" value="Checkout">
    </form>
</body>
</html>
