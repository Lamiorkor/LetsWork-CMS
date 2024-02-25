<?php 
include "../settings/connection.php";

if (isset($_POST['register'])) {

    $cid = mysqli_real_escape_string($con, $_POST['cid']);
    $chore_name = mysqli_real_escape_string($con, $_POST['chore_name']);
    
        
    
    $sql = "INSERT INTO Chores (cid, chore_name) 
            VALUES (?,?)";
    
    }
    
    if (mysqli_query($con, $sql)) {
        header("Location: ../admin/chore_control_view.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
?>