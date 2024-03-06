<?php 
include "../settings/connection.php";

if(isset($_GET['cid'])) {
    $cid = $_GET['cid'];

    $sql = "DELETE FROM Chores WHERE cid = '$cid'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location:../admin/chore_control_view.php");
    } else {
        echo "Query failed to execute";
        return false;
    }

} else {
    header("Location: ../admin/chore_control_view.php");
}

?>