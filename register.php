<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

<div class="login-container">

    <h2>Create Account</h2>

    <form action="register_process.php" method="POST">

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="enter username" required>
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="enter email" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="enter password" required>
        </div>

        <button type="submit">Sign Up</button>

    </form>

</div>

</body>
</html>