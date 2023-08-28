
<!DOCTYPE html>
<html>
<head>
    <title>Niche Selection</title>
</head>
<body>
    <h2>Choose a Niche for Your E-commerce Website</h2>
    <form method="POST" action="product_catalog.php">
        <label for="niche">Select a Niche:</label>
        <select id="niche" name="niche">
            <option value="clothing">Clothing</option>
            <option value="electronics">Electronics</option>
            <option value="home_decor">Home Decor</option>
            <option value="beauty_products">Beauty Products</option>
            <option value="unique_niche">Unique Niche</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $selectedNiche = $_POST['niche'];

    switch ($selectedNiche) {
        case 'clothing':
           
            break;
        case 'electronics':
      
            break;
        case 'home_decor':
       
            break;
        case 'beauty_products':
    
            break;
        case 'unique_niche':
          
            break;
        default:
          
            break;
    }
}
?>
