<?php 
include "../settings/connection.php";
include "../functions/select_role_fxn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Work! - Sign Up</title>
    <link rel="stylesheet" href="../css/register_view.css">
</head>

<body>
    <h1>Let's Work!</h1>
    <h3><i>A Chore Management System</i></h3>
    <div class="signup-container">
        <h1>Sign Up</h1>
        <h3><i>Kindly enter the following information to register onto our platform:</i></h3>
        <form action="../actions/register_user_action.php" name="signupForm" method="POST" id="signupForm">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="fname" pattern="[A-Za-z ]+" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lname" pattern="[A-Za-z]+" required>

            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="0" checked>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="1">
            <label for="female">Female</label>

            <label for="familyRole">Family Role:</label>
            <select id="familyRole" name="fid" required>
            <?php getRoles(); ?>
            </select>
    
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="tel">Telephone Number (format: +233890982765):</label>
            <input type="text" id="tel" name="tel" pattern="^\+\d{1,3}\d{9}$|^\d{9}$" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="passwd" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>

            <label for="passwordRetype">Retype Password:</label>
            <input type="password" id="passwordRetype" name="passwordRetype" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>

            <button type="submit" name="register">Sign Up</button>
        </form>
        <p class="login-link">Already have an account? <a href="login_view.php">Login here</a></p>
    </div>

    <script src="../js/register_view.js"></script>

</body>

</html>