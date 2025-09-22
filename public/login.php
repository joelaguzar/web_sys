<?php
    session_start();
    include 'db.php';

    if (isset($_POST['login'])) {
        $email = pg_escape_string($dbconn, $_POST['email']);
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = pg_query($dbconn, $query);
        $user = pg_fetch_assoc($result);

        //check password
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['userid'] = $user['userid'];
            $_SESSION['sr_code'] = $user['sr_code'];
            $_SESSION['full_name'] = trim($user['first_name'] . ' ' . $user['last_name']);

            header("Location: resume.php");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" name="login" value="Login">
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </body>
</html>