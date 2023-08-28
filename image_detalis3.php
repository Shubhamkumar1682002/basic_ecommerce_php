<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-img-top {
            height: 500px;
            object-fit: cover;
        }

        .card-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #f0c14b;
            border-color: #a88734 #9c7e31 #846a29;
            color: #111;
            font-size: 18px;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #f7dfa5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Details</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="https://4.imimg.com/data4/PM/KH/MY-34794816/lcd.png" alt="Electronics" class="card-img-top img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Product description goes here.</p>
                        <p class="card-text">Price: RS 23459</p>
                        <p class="card-text">Category: Electronics</p>
                        <a href="cart.php" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
