<?php
include "../settings/connection.php";

$confirmDelete = true;

if(isset($_GET['assignmentid'])) {
    $assignmentid = $_GET['assignmentid'];

    if ($confirmDelete) {
        
?>

    <script>
        confirm("Do you want to delete this assignment?");
    </script>

<?php

    $sql = "DELETE FROM Assignment WHERE assignmentid = '$assignmentid'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location:../admin/assign_chore_view.php");
    } else {
        echo "Query failed to execute";
        return false;
    }
    }    
}

?>