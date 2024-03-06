<?php 
function getOneChore($id) {
    include "../settings/connection.php";

    $sql = "SELECT * FROM Chores WHERE id = $id";

    $result = mysqli_query($con, $sql);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            return false;
        }
    }
}
?>