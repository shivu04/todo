<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LOGIN</title>
    <link rel="stylesheet" href="login.css">
    <link rel='shortcut icon' type="image/ico" href="favicon.ico">
</head>

<body>
    <div class="centre">
        <h1>Login</h1>
        <form action="validation.php" method="POST">
            <div class="txt_field">
                <input type="text" name="user" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup_link">
                New member? <a href="register.php">Signup</a>
            </div>
        </form>
    </div>

</body>

</html>