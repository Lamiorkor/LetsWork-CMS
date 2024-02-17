<?php
include "../settings/connection.php";

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $fid = $_POST['fid'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['passwd']; 

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO People (rid, fid, fname, lname, gender, dob, email, passwd) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("issssss", $fid, $fname, $lname, $gender, $dob, $email, $hashed_password);

    if ($stmt->execute()) {
        header("Location: ../login/login.php");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $stmt->close();
    $con->close();
}
?>
