<?php 
function getOneChore($id) {
    include "../settings/connection.php";

    $sql = "SELECT * FROM Chores WHERE cid = $id";
    
    $result = mysqli_query($con, $sql);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            echo "No result found";
            return false;
        } 
    }  else {
        echo "Query failed to execute";
        return false;
    }

    $con->close();

}

?>