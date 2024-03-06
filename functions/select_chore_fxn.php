<?php
function selectChore()
{
    include "../settings/connection.php";

    $sql = "SELECT cid, chorename FROM Chores";

    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['cid'] . '">' . $row['chorename'] . '</option>';
        }
    } else {
        echo "Query failed to execute";
    }
}
?>