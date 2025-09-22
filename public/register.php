<?php
    session_start();
    require __DIR__ . '/../config/database.php';

    if (isset($_POST['register'])) {
        $sr_code = pg_escape_string($dbconn, $_POST['sr_code']);
        $first_name = pg_escape_string($dbconn, $_POST['first_name']);
        $middle_name = pg_escape_string($dbconn, $_POST['middle_name']);
        $last_name = pg_escape_string($dbconn, $_POST['last_name']);
        $email = pg_escape_string($dbconn, $_POST['email']);
        $password = $_POST['password'];

         $hashed_password = password_hash($password, PASSWORD_DEFAULT);

         $check_query = "SELECT * FROM users WHERE sr_code = '$sr_code' OR email = '$email'";
         $check_result = pg_query($dbconn, $check_query);

        if (pg_num_rows($check_result) > 0) {
        $error_message = "Error: A user with SR-Code or Email already exists.";
        } else {
            $middle_name_insert = !empty($middle_name) ? '$middle_name' : "NULL";
            $query = "INSERT INTO users (sr_code, first_name, middle_name, last_name, email, password) VALUES ('$sr_code', '$first_name', '$middle_name_insert', '$last_name', '$email', '$hashed_password')";
        
            $result = pg_query($dbconn, $query);

            if ($result) {
                $success_message = "Registration successful! You can now <a href='login.php'>login</a>.";
            } else {
                $error_message = "An error occured during registration. Please try again.";
            }
        }
    }  

?>

<!DOCTYPE>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Register</title>
    </head>
    <body>
        <h2>Create Your Account</h2>
        
        <?php
            if (isset($error_message)) {
                echo '<p style="color: red;">' . $error_message . '</p>';
            }
            if (isset($success_message)) {
                echo '<p style="color: green;">' . $success_message . '</p>';
            }
        ?>

        <form action="register.php" method="post">
            <label for="sr_code">SR-Code:</label><br>
            <input type="text"  id="sr_code" name="sr_code" required><br><br>

            <label for="first_name">First Name:</label><br>
            <input type="text"  id="first_name" name="first_name" required><br><br>

            <label for="first_name">Middle Name:</label><br>
            <input type="text"  id="middle_name" name="middle_name"><br><br>

            <label for="first_name">Last Name:</label><br>
            <input type="text"  id="last_name" name="last_name" required><br><br>

            <label for="first_name">Email:</label><br>
            <input type="text"  id="email" name="email" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password"  id="password" name="password" required><br><br>

            <input type="submit" name="register" value="Register">
        </form>

        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </body>
</html>