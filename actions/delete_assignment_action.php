<?php
include "../settings/connection.php";

if(isset($_GET['assignmentid'])) {
    $assignmentid = $_GET['assignmentid'];

    $sql = "DELETE FROM Assignment WHERE assignmentid = '$assignmentid'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location:../admin/assign_chore_view.php");
    } else {
        echo "Query failed to execute";
        return false;
    }
}

?>