<?php
session_start();
if (isset($_SESSION['uname'])) {
    header("Location: home.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="signup.css">
</head>
<body>
<div class="body">
  <div class="container" style="max-width:400px; margin-top:50px;">
    <h2>Sign Up</h2>
    <form method="post" action="register.php">
      <input type="text" name="uname" placeholder="Username" required><br><br>
      <input type="password" name="pass" placeholder="Password" required><br><br>
      <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
      <input type="submit" value="Sign Up" style="width:100%; background-color:#f48535; color:white; padding:10px; border:none; border-radius:6px;">
    </form>
    <p>Already have an account? <a href="login.php">Log In</a></p>
  </div>
</div>
</body>
</html>
