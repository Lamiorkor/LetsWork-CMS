<?php

function getAllChores()
{
    include "../settings/connection.php";

    $sql = "SELECT * FROM Chores";
    $result = mysqli_query($con, $sql);

    $chores = array();

    if ($result) {
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                $chores[] = $row;
            }
            return $chores;
        } else {
            echo "Error: No record found";
            return false;
        }
    } else {
        echo "Error: Query failed";
        return false;
    }
}