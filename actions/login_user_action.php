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
            header("Location: ../view/home_page.html");
            exit();
        } else {
            echo "Error: Incorrect password";
        }
    } else {
        echo "Error: User not found";
    }

   
    $con->close();
} else {
    echo "errorrr!!";
}
?>
