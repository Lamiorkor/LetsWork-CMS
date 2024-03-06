
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Work! - Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>


<body>
    <h1>Let's Work!</h1>
    <h2><i>A Chore Management System</i></h2>

    <form action="../actions/login_user_action.php" name="loginForm" method="POST" id="loginForm">
        <div class="grid-container">
            <div class="grid-item">Email Address</div>
            <div class="grid-item"><input type="text" id="emailInput" name="email" placeholder="Enter your email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required></div>
            <div class="grid-item">Password</div>
            <div class="grid-item"><input type="password" id="passwordInput" name="password" placeholder="Enter your password" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required></div>
            <div class="grid-item" colspan="2">
                <button type="submit" name="login"><b>Sign In<b></b></button>
                <p class="sign_up-link;">Don't have an account? <a href="register_view.php">Sign Up here</a></p>
            </div>
        </div>
    </form>

    <script src="../js/login.js"></script>
</body>

</html>