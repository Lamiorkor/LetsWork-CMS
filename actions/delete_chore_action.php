<?php 
include "../settings/connection.php";

$confirmDelete = true;

if(isset($_GET['cid'])) {
    $cid = $_GET['cid'];

    if ($confirmDelete) {
        
?>

    <script>
        confirm("Do you want to delete this chore?");
    </script>

<?php

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

}

?>