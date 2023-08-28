<!-- <?php

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

 
    if (password_verify($password, $hashedPasswordFromDatabase)) {
        
        session_start();
        $_SESSION['user_id'] = $userId;
        $_SESSION['username'] = $username;

        header('Location: dashboard.php');
        exit();
    } else {
       
        $errorMessage = "Invalid email or password.";
    }
}
?> -->

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <h2>User Login</h2>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" name="login" value="Login">
    </form>
    <?php if (isset($errorMessage)) {
        echo "<p>$errorMessage</p>";
    } ?>
</body>
</html>
