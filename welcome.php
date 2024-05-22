<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
