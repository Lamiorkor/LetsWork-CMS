<?php
function selectPerson()
{
    include "../settings/connection.php";

    $sql = "SELECT pid, fname FROM People";

    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['pid'] . '">' . $row['fname'] . '</option>';
        }
    } else {
        echo "Query failed to execute";
    }
}
?>