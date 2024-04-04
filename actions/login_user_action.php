<?php

session_start();

include "../settings/connection.php";

if(isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $sql = "SELECT * FROM People WHERE email = '$email'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result)> 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['passwd'])) {
            $_SESSION['user_id'] = $row['pid'];
            $_SESSION['role_id'] = $row['rid'];

            header("Location: ../view/home_page.php");
        } else {
            echo "Error: Incorrect password. Try again.";
            header("Location: ../login/login_view.php");
        }
    } else {
        echo "Error: User not found. Sign up to the platform";
        header("Location:../login/register_view.php");
    }

   
    $con->close();
} else {
    echo "Error: Login failed";
    header("Location: ../login/login_view.php");
}
?>
