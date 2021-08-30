<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO REGISTER</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <div class="centre">
        <h1>Sign up</h1>
        <form action="registration.php" method="POST">
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
            <button type="submit" class="btn btn-primary">Register</button>
            
            
        </form>
    </div>

</body>

</html>