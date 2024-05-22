<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><div class='message'>Registration successful. <a href='login.php'>Login here</a></div></div>";
    } else {
        echo "<div class='container'><div class='message'>Error: " . $sql . "<br>" . $conn->error . "</div></div>";
    }

    $conn->close();
}
?>
