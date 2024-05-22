<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register_process.php" method="POST">
            <label>Username:</label>
            <input type="text" name="username" required><br>
            <label>Email:</label>
            <input type="email" name="email" required><br>
            <label>Password:</label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>