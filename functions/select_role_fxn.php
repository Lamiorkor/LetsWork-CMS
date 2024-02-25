<?php
function getRoles()
{
    include "../settings/connection.php";

    $sql = "SELECT fid, fam_name FROM Family_name";

    $result = mysqli_query($con, $sql);

    if ($result) {
        //echo "Query executed successfully";
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['fid'] . '">' . $row['fam_name'] . '</option>';
        }
    } else {
        echo "Query failed to execute";
    }
}

// function getFID()
// {
//     include "../settings/connection.php";

//     $sql = "SELECT fid FROM Family_name";

//     $fid = mysqli_query($con, $sql);

//     if ($fid) {
//         return $fid;
//     } else {
//         echo "Failed to execute";
//     }
// }

?>