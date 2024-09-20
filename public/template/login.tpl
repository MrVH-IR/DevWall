<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <h1>Login Here</h1>
    <form action="./login.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="submit" method="post">Login</button>
    </form>
</body>
</html>
