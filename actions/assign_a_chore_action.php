<?php
session_start();
include "../settings/connection.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST['submit'])) {


    $pid = mysqli_real_escape_string($con, $_POST['assignPerson']);
    $cid = mysqli_real_escape_string($con, $_POST['assignChore']);
    $date_due = mysqli_real_escape_string($con, $_POST['dateDue']);

    //$chore_name = "SELECT chorename FROM Chores WHERE cid = '$cid'";
    $who_assigned = $_SESSION['user_id'];

    //$date_assign = mysqli_query($con, "NOW()");

    $sql = "INSERT INTO Assignment (cid, sid, date_assign, date_due, who_assigned) 
            VALUES ('$cid', 1, NOW(), '$date_due', '$who_assigned')";
    
    $result1 = mysqli_query($con,$sql);

    $assign_id = mysqli_insert_id($con);

    $sql2 = "INSERT INTO Assigned_people (pid, assignmentid)
            VALUES ('$pid', '$assign_id')";

    $result2 = mysqli_query($con,$sql2);

    if ($result1 && $result2) {
        header("Location: ../admin/assign_chore_view.php");
        exit();
    } else {
        echo "Error: Query failed to execute";
        header("Location: ../admin/assign_chore_view.php");
        exit();
    }

    $con->close();
}
?>