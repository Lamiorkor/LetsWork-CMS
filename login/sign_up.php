<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Work! - Sign Up</title>
    <link rel="stylesheet" href="../css/sign_up.css">
</head>

<body>
    <h1>Let's Work!</h1>
    <h3><i>A Chore Management System</i></h3>
    <div class="signup-container">
        <h1>Sign Up</h1>
        <h3><i>Kindly enter the following information to sign up onto our platform:</i></h3>
        <form action="../actions/register_user.php" name="signupForm" method="POST" id="signupForm" onsubmit="redirectToRegisterUser()">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="fname" pattern="[A-Za-z]+" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lname" pattern="[A-Za-z]+" required>

            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="0" checked>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="1">
            <label for="female">Female</label>

            <label for="familyRole">Family Role:</label>
            <select id="familyRole" name="fid" required>
                <option value="0" disabled selected>Select</option>
                <option value="1">Father</option>
                <option value="2">Mother</option>
                <option value="3">Son</option>
                <option value="4">Daughter</option>
                <option value="5">Sister</option>
                <option value="6">Brother</option>
            </select>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="passwd" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>

            <label for="passwordRetype">Retype Password:</label>
            <input type="password" id="passwordRetype" name="passwordRetype" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>

            <button type="submit" name="submit">Sign Up</button>
        </form>
        <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
    </div>
    
    <script src="../js/sign_up.js" defer></script>

</body>

</html>
