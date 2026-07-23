<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-container">

    <h2>Login</h2>

    <form method="POST" action="login_process.php">

        <label>Email</label>
        <input type="email" name="email" placeholder="Enter Email" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password" required>

        <button type="submit">Submit</button>

    </form>

    <p>
        Don't have an account?
        <a href="register.php">Sign Up</a>
    </p>

</div>

</body>
</html>