<?php
include "../actions/get_all_chores_action.php";

function getChores() {
    $chore_data = getAllChores();


    if ($chore_data) {
        echo "<table>";

        foreach ($chore_data as $row) {
            echo "<tr>";
            echo "<td>" . $row['chorename'] . "</td>";
            echo "<td>";
            echo "<div class='actions'>";
            echo "<div class='edit'><a href='../admin/edit_chore_view.php?cid=" . $row['cid'] . "'><img src='../assets/pencil.png' alt='edit' title='edit request' style='width: 20px;'></a></div>";
            echo "<div class='delete'><a href='../actions/delete_chore_action.php?cid=" . $row['cid'] . "'><img src='../assets/delete.png' alt='delete' title='delete request' style='width: 20px;'></a></div>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No chores found.";
    }
}

function getChores_Admin() {
    $chore_data = getAllChores();


    if ($chore_data) {
        echo "<table>";

        foreach ($chore_data as $row) {
            echo "<tr>";
            echo "<td>" . $row['chorename'] . "</td>";
            echo "<td>";
            echo "<div class='actions'>";
            echo "<div class='edit'><a href='../admin/edit_chore_view.php?cid=" . $row['cid'] . "'><img src='../assets/pencil.png' alt='edit' title='edit request' style='width: 20px;'></a></div>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No chores found.";
    }
}
