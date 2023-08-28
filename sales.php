<?php
// Original product price
$productPrice = 100;

// Define the coupon code and discount percentage
$couponCode = 'SALE2023';
$discountPercentage = 20;

// Check if the coupon code is submitted
if (isset($_POST['coupon'])) {
    $enteredCode = $_POST['coupon'];

    // Validate the coupon code
    if ($enteredCode === $couponCode) {
        // Apply the discount
        $discountAmount = $productPrice * ($discountPercentage / 100);
        $discountedPrice = $productPrice - $discountAmount;

        // Display the discounted price
        echo 'Discounted Price: $' . $discountedPrice;
    } else {
        // Invalid coupon code
        echo 'Invalid coupon code.';
    }
}
?>

<!-- HTML form to submit the coupon code -->
<form method="POST" action="">
    <label for="coupon">Enter Coupon Code:</label>
    <input type="text" id="coupon" name="coupon">
    <button type="submit">Apply Coupon</button>
</form>
<?php
// Original product price
$productPrice = 100;

// Define the discount percentage for the sale
$saleDiscountPercentage = 10;

// Check if the sale is active
$isSaleActive = true;

// Calculate the discount amount
$discountAmount = $productPrice * ($saleDiscountPercentage / 100);
$discountedPrice = $productPrice - $discountAmount;

// Calculate the total savings
$totalSavings = $discountAmount;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sales and Promotions</title>
</head>
<body>
    <h2>Product Details</h2>
    <p>Original Price: $<?php echo $productPrice; ?></p>
    
    <?php if ($isSaleActive) { ?>
        <p>Sale Discount: <?php echo $saleDiscountPercentage; ?>%</p>
        <p>Discounted Price: $<?php echo $discountedPrice; ?></p>
        <p>Total Savings: $<?php echo $totalSavings; ?></p>
    <?php } else { ?>
        <p>No active sales at the moment.</p>
    <?php } ?>
</body>
</html>
