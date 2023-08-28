<?php

$products = [
    // Your product data here
];

// Check if the 'id' parameter is set
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $product = null;

    // Find the product with the matching ID
    foreach ($products as $p) {
        if ($p['id'] == $productId) {
            $product = $p;
            break;
        }
    }

    if ($product) {
        $reviews = $product['reviews'];
    } else {
        // Redirect to not-found.php if the product is not found
        header('Location: not-found.php');
        exit;
    }
} else {
    // Redirect to not-found.php if the 'id' parameter is not set
    header('Location: not-found.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Reviews</title>
</head>
<body>
    <?php if ($product) { ?>
        <h2><?php echo $product['name']; ?></h2>
        <p>Price: $<?php echo $product['price']; ?></p>
        <p>Description: <?php echo $product['description']; ?></p>
        <img src="<?php echo $product['image']; ?>" alt="Product Image">
        <hr>
        <h3>Customer Reviews</h3>
        <?php if (!empty($reviews)) { ?>
            <?php foreach ($reviews as $review) { ?>
                <p>Rating: <?php echo $review['rating']; ?>/5</p>
                <p>Comment: <?php echo $review['comment']; ?></p>
                <p>Author: <?php echo $review['author']; ?></p>
                <hr>
            <?php } ?>
        <?php } else { ?>
            <p>No reviews found.</p>
        <?php } ?>
    <?php } else { ?>
        <p>Product not found.</p>
    <?php } ?>
</body>
</html>
