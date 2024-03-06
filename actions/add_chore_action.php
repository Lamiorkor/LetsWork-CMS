<?php 
session_start();
include "../settings/connection.php";

if (isset($_POST['submit'])) {

    $chore_name = mysqli_real_escape_string($con, $_POST['choreName']);
    
    $sql = "INSERT INTO Chores (chorename) 
            VALUES ('$chore_name')";

    }

    $result = mysqli_query($con, $sql);
    
    if ($result) {
        header("Location: ../admin/chore_control_view.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
?>