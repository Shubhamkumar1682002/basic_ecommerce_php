<?php

$products = [
    [
        'id' => 1,
        'name' => 'Product 1',
        'price' => 10.99,
        'description' => 'Description of Product 1',
        'reviews' => [
            ['user' => 'User1', 'rating' => 4, 'comment' => 'Good product'],
            ['user' => 'User2', 'rating' => 5, 'comment' => 'Excellent quality']
        ]
    ],
    [
        'id' => 2,
        'name' => 'Product 2',
        'price' => 19.99,
        'description' => 'Description of Product 2',
        'reviews' => [
            ['user' => 'User3', 'rating' => 3, 'comment' => 'Average product'],
            ['user' => 'User4', 'rating' => 2, 'comment' => 'Not satisfied']
        ]
    ],
   
];


if (isset($_POST['submitReview'])) {
    $productId = $_POST['productId'];
    $user = $_POST['user'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];


    $review = ['user' => $user, 'rating' => $rating, 'comment' => $comment];
    $products[$productId]['reviews'][] = $review;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Reviews</title>
</head>
<body>
    <h2>Product Reviews</h2>

    <?php foreach ($products as $product) { ?>
        <div>
            <h3><?php echo $product['name']; ?></h3>
            <p>Price: $<?php echo $product['price']; ?></p>
            <p>Description: <?php echo $product['description']; ?></p>
            <h4>Reviews:</h4>
            <?php if (!empty($product['reviews'])) { ?>
                <ul>
                    <?php foreach ($product['reviews'] as $review) { ?>
                        <li>
                            User: <?php echo $review['user']; ?><br>
                            Rating: <?php echo $review['rating']; ?>/5<br>
                            Comment: <?php echo $review['comment']; ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <p>No reviews yet.</p>
            <?php } ?>

            <h4>Leave a Review:</h4>
            <form method="POST" action="">
                <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                <label for="user">User:</label>
                <input type="text" id="user" name="user" required>
                <br>
                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" required></textarea>
                <br>
                <input type="submit" name="submitReview" value="Submit Review">
            </form>
        </div>
        <hr>
    <?php } ?>
</body>
</html>
