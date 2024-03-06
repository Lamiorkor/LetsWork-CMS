<?php

function getAllAssignments() {
    include "../settings/connection.php";

    $sql = "SELECT * FROM Assignment";

    $result = mysqli_query($con, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $assignments = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $assignments[] = $row;
            }

            return $assignments;
        } else {
            echo "No assignments found";
        }
    } else {
        echo "Query failed to execute";
    }
}

// getAllAssignments();
?>