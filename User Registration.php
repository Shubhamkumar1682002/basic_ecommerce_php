<?php

if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

 


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   
   

   
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
