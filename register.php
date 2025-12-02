<?php
session_start();

if (isset($_POST['uname']) && isset($_POST['pass']) && isset($_POST['cpass'])) {
    $username = trim($_POST['uname']);
    $password = trim($_POST['pass']);
    $cpass = trim($_POST['cpass']);

    if ($password !== $cpass) {
        echo "<script>alert('Passwords do not match'); window.location='signup.php';</script>";
        exit;
    }

    try {
        $con = new PDO('mysql:host=localhost;dbname=sessiondb', 'root', '');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if username exists
        $stmt = $con->prepare("SELECT * FROM users WHERE uname=:uname");
        $stmt->bindParam(':uname', $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "<script>alert('Username already exists'); window.location='signup.php';</script>";
            exit;
        }

        // Insert new user
        $stmt = $con->prepare("INSERT INTO users (uname, pass) VALUES (:uname, :pass)");
        $stmt->bindParam(':uname', $username);
        $stmt->bindParam(':pass', $password);
        $stmt->execute();

        echo "<script>alert('Signup successful! Please log in.'); window.location='index.php';</script>";
        exit;

    } catch (PDOException $ex) {
        echo "<script>alert('Database error: ".$ex->getMessage()."'); window.location='signup.php';</script>";
        exit;
    }
} else {
    echo "<script>window.location='signup.php';</script>";
    exit;
}
?>
