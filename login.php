<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css" />
    <title>Log In</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <?php if (isset($_SESSION['error'])) { ?>
            <div class="error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php } ?>

        <form method="POST" action="validate.php">
            <input type="text" name="uname" placeholder="Username" required><br>
            <input type="password" name="pass" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>
</body>
</html>
