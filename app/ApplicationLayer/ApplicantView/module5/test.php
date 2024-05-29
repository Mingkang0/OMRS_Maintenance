<?php
session_start();


// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate the username and password (you can add your own validation here)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example validation: check if the username and password are both "admin"
    if ($username === '0179785153' && $password === 'admin') {
        // Store the username in the session
        $_SESSION['username'] = $username;

        // Redirect the user to the home page or any other authorized page
        header("Location: ../module5/ApplicantApplyPage.php");
        exit;
    } else {
        // Invalid credentials, show an error message
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>
