<?php
session_start();

$username = $_POST['uname'] ?? "";
$password = $_POST['pass'] ?? "";

if (!empty($username) && !empty($password)) {
    try {
        // Connect to DB
        $con = new PDO('mysql:host=localhost;dbname=sessiondb', 'root', '');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Use prepared statement for safety
        $stmt = $con->prepare("SELECT * FROM users WHERE uname = ? AND pass = ?");
        $stmt->execute([$username, $password]);

        if ($stmt->rowCount() == 1) {
            // Login success
            $_SESSION['uname'] = $username;
            header("Location: index.php"); 
            exit();
        } else {
            // Login failed
            $_SESSION['error'] = "Invalid username or password!";
            header("Location: login.php");
            exit();
        }
    } catch (PDOException $ex) {
        $_SESSION['error'] = "Database connection error!";
        header("Location: login.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Please fill in all fields!";
    header("Location: login.php");
    exit();
}
?>
