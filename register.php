<?php
    if(isset($_POST["submit"])){
        echo "Form Submitted";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="./assets/style/style.css">
    <title>Register</title>
</head>
<body>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="./assets/imgs/logo.png" title="logo" alt="logo">
                <h3>Sign Up</h3>
                <span>to continue to MyFlix</span>
            </div>
            <form method='POST'>
                <input type="text" name="firstName" placeholder="First Name" id="firstName" required>
                <input type="text" name="lastName" placeholder="Last Name" id="lastName" required>
                <input type="text" name="username" placeholder="Username" id="userName" required>
                <input type="text" name="email" placeholder="Email" id="email" required>
                <input type="text" name="email2" placeholder="Confirm Email" id="email2" required>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="password" name="password2" placeholder="Confirm Password" id="password2" required>
                <input type="submit" name="submit" class="button" value="Sign Up">
            </form>
            <a href="login.php" class="signInMessage">Already have an account? Sign in here.</a>
        </div>
    </div>
</body>
</html>