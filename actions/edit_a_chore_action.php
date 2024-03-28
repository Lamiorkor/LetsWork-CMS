<?php
include "../settings/connection.php";

if (isset($_POST['submit'])) {

   $cid = mysqli_real_escape_string($con, $_POST['cid']);
   $chore_name = mysqli_real_escape_string($con, $_POST['choreName']);

    $sql = "UPDATE Chores
            SET chorename = '$chore_name'
            WHERE cid = '$cid'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: ../admin/chore_control_view.php");
        exit();
    } else {
        echo "Query failed to execute";
        header("Location: ../admin/chore_control_view.php");
        exit();
    }

    $con->close();
    
} else {
    echo "No data received";
    header("Location: ../admin/chore_control_view.php");    
    exit();
}
