<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
        } else {
            echo "<div class='container'><div class='message'>Invalid password. <a href='login.php'>Try again</a></div></div>";
        }
    } else {
        echo "<div class='container'><div class='message'>No user found with that username. <a href='login.php'>Try again</a></div></div>";
    }

    $conn->close();
}
?>
