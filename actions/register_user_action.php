<?php
include "../settings/connection.php";

if (isset($_POST['register'])) {

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $fid = mysqli_real_escape_string($con, $_POST['fid']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $tel = mysqli_real_escape_string($con, $_POST['tel']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['passwd']);


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO People (rid, fid, fname, lname, gender, dob, tel, email, passwd) 
        VALUES (3, '$fid', '$fname', '$lname', '$gender', '$dob', '$tel', '$email', '$hashed_password')";

    if (mysqli_query($con, $sql)) {
        header("Location: ../login/login_view.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
