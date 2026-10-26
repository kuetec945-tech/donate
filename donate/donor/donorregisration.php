<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="styles/registration.css">
</head>

<body>
    <section>
        <form action="" class="form">

            <h1>Life<span>Pulse</span></h1>

            <div class="form-group">
                <h1 class="form-title">create your donor account</h1><br>
                <label for="full name">Full Name</label>
                <input type="text" name="full name" placeholder="Enter your full name" required><br>
                <label for="phone">phone number</label>
                <input type="text" name="phone" placeholder="Enter your phone number" required><br>
                <label for="email">email</label>
                <input type="email" name="email" placeholder="Enter your email" required><br>
                <label for="password">password</label>
                <input type="password" name="password" placeholder="Enter your password" required><br>
                <label for="confirm password">confirm password</label>
                <input type="password" name="confirmpassword" placeholder="confirm password" required><br>

            </div>
            <button type="submit">Register</button>
            <div class="login-link">
                have an account already? <a href="login.php">Login</a>
            </div>
        </form>
    </section>
</body>

</html>