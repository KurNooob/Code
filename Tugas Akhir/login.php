<?php
session_start();
$errorMessage = "";

// Apabila log out ditekan
if (isset($_POST['logout'])) {
    unset($_SESSION);
    session_destroy();
    header("Location: login.php");
    exit;
}

// Validasi login ketika tombol "Login" ditekan
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are correct
    if ($username === "u" && $password === "p") {
        header("Location: dashboard.php");
        exit;
    } else {
        $errorMessage = "Wrong username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
    <div class="container">
    <div class="login-box">
    <h3 class="text-center mb-4"><strong>Welcome back!</strong></h3>
        <p style="color: #B5BAC1; text-align: center;">We're so excited to see you again!</p>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-floating mb-3">
                <!-- Membuat tempat input -->
                <label for="username" style="font-size: 12px;">USERNAME</label>
                    <input type="text" class="form-control bg-custom" name="username" id="username">
            </div>
            <br>
            <div class="form-floating mb-3">
                <!-- Membuat tempat input -->
                <label for="password" style="font-size: 12px;">PASSWORD</label>
                <input type="password" class="form-control bg-custom" name="password" id="password" >
            </div>
            <br>
            <p class="error-message"><?php echo $errorMessage; ?></p>
            <button type="submit" name="login" class="btn btn-primary btn-block mb-3">Log In</button>
        </form>
    </div>
    </div>
</body>
</html>