<?php
include "../settings/connection.php";

if (isset($_POST['submit'])) {

   $cid = mysqli_real_escape_string($con, $_POST['cid']);
   $chore_name = mysqli_real_escape_string($con, $_POST['choreName']);

    $sql = "UPDATE Chores WHERE id = '$cid'
            SET chorename = '$chore_name'";

    if (mysqli_query($con, $sql)) {
        header("Location: ../admin/chore_control_view.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
