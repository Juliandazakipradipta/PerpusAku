

<?php
session_start();
if (isset($_SESSION['email'])) {
    header('location: login.php');
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="./login-proccess.php">

    <label for="email">Email: </label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password: </label><br>
        <input type="passowrd" id="password" name="password"><br>

        <br>
        <button type="submit" value="login">LOGIN</button><br>
    </form>

</body>
</html>