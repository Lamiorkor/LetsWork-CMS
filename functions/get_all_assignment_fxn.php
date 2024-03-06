<?php
include "../actions/get_all_assignment_action.php";

function getChores() {
    $assigns = getAllAssignments();

    if ($assigns) {
        echo "<table>";
        // echo "<tr><th>Chore Name</th><th>Chore Name</th><th>Assigned By</th><th>Date Assigned</th><th>Date Due</th><th>Chore Status</th><th>Actions</th></tr>";

        foreach ($assigns as $row) {
            echo "<tr>";
            echo "<td>" . $row["cid"] . "</td>";
            echo "<td>" . $row["who_assigned"] . "</td>";
            echo "<td>" . $row["date_assign"] . "</td>";
            echo "<td>" . $row["date_due"] . "</td>";
            echo "<td>" . $row["sid"] . "</td>";
            echo "<td>";
            echo "<div class='actions'>";
            echo "<div class='edit'><a href='../admin/edit_chore_view.php?cid=" . $row['cid'] . "'><img src='../assets/pencil.png' alt='edit' title='edit request' style='width: 20px;'></a></div>";
            echo "<div class='status'><img src='../assets/status.png' alt='edit' title='edit request' style='width: 20px;'></a></div>";
            echo "<div class='delete'><a href='../actions/delete_chore_action.php?cid=" . $row['cid'] . "'><img src='../assets/delete.png' alt='delete' title='delete request' style='width: 20px;'></a></div>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No chore assignments found.";
    }
}


?>