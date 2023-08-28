<?php
session_start();


function calculateCartTotal() {
    $total = 0;
    foreach ($_SESSION['cart'] as $product) {
        $total += $product['price'] * $product['quantity'];
    }
    return $total;
}


if (isset($_POST['add_to_cart'])) {
    $product = array(
        'id' => $_POST['product_id'],
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'quantity' => $_POST['quantity']
    );

   
    if (isset($_SESSION['cart'][$product['id']])) {
        $_SESSION['cart'][$product['id']]['quantity'] += $product['quantity'];
    } else {
        $_SESSION['cart'][$product['id']] = $product;
    }
}

if (isset($_POST['update_quantity'])) {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    if ($quantity <= 0) {
        unset($_SESSION['cart'][$productId]);
    } else {
        $_SESSION['cart'][$productId]['quantity'] = $quantity;
    }
}


if (isset($_POST['remove_from_cart'])) {
    $productId = $_POST['product_id'];
    unset($_SESSION['cart'][$productId]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="number"] {
            width: 50px;
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
    <h2>Shopping Cart</h2>

    <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php foreach ($_SESSION['cart'] as $product) { ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td>
                        <form method="POST" action="">
                            <input type="number" name="quantity" value="<?php echo $product['quantity']; ?>">
                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                            <input type="submit" name="update_quantity" value="Update">
                        </form>
                    </td>
                    <td><?php echo $product['price'] * $product['quantity']; ?></td>
                    <td>
                        <form method="POST" action="">
                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                            <input type="submit" name="remove_from_cart" value="Remove">
                        </form>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="3"><strong>Total</strong></td>
                <td><?php echo calculateCartTotal(); ?></td>
                <td></td>
            </tr>
        </table>

        <form method="POST" action="">
            <input type="submit" name="checkout" value="Checkout">
        </form>
    <?php } else { ?>
        <p>Your cart is empty.</p>
    <?php } ?>
    <a href="payment.php"><button> checkout </button><a>
   <?php


            
        // Function to fetch attendance data for a student
        function fetchAttendanceData($id) {
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "cart";

          
            $conn = new mysqli($host, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

        
            $stmt = $conn->prepare("SELECT name , id , price FROM products  WHERE id = ?");
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $result = $stmt->get_result();

      
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $id = $row["id"];
                $name = $row["name"];
                $price = $row["price"];

                echo "<h3>id</h3>";
                echo "<table>";
                echo "<tr><th>Present</th><th>Absent</th><th>Total</th></tr>";
                echo "<tr><td>" . $id . "</td><td>" . $name . "</td><td>" . $price . "</td></tr>";
                echo "</table>";
            } else {
                echo "<p>No attendance records found.</p>";
            }

            $stmt->close();
            $conn->close();
        }

        fetchAttendanceData(123);
        fetchAttendanceData(456);
        fetchAttendanceData(789);

           
        ?>
</body>
</html>
