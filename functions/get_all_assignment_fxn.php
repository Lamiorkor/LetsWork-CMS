<?php

// function getChoreName($cid)
// {
//     include "../settings/connection.php";

//     $cid = mysqli_real_escape_string($con, $cid);

//     $sql = "SELECT chorename FROM Chores 
//             WHERE cid = '$cid'";

//     $result = mysqli_query($con, $sql);

//     if ($result) {
//         $chorename = $result;
//         return $chorename;
//     } else {
//         echo "Query failed to execute";
//         header("Location: ../admin/chore_control_view.php");
//     }
// }

// //getChoreName(1);
// // 

// function getPersonName($pid)
// {
//     include "../settings/connection.php";

//     $pid = mysqli_real_escape_string($con, $pid);
//     // $user_id = $_SESSION['user_id'];

//     $sql = "SELECT fname FROM People
//             WHERE pid = '$pid'";

//     $result = mysqli_query($con, $sql);

//     if ($result) {
//         $pname = mysqli_real_escape_string($con, $result);
//         return $pname;
//     } else {
//         echo "Query failed to execute";
//         header("Location: ../admin/chore_control_view.php");
//     }
// }

function getStatus($sid)
{
    if ($sid == 1) {
        echo "<div class='status'><img src='../assets/assigned.png' alt='assigned_chore' title='chore_status' style='width: 20px;'></div>";
    }

    if ($sid == 2) {
        echo "<div class='status'><img src='../assets/inprogress.png' alt='chore_inprogress' title='chore_status' style='width: 20px;'></div>";
    }

    if ($sid == 3) {
        echo "<div class='status'><img src='../assets/completed.png' alt='chore_completed' title='chore_status' style='width: 20px;'></div>";
    }

    if ($sid == 4) {
        echo "<div class='status'><img src='../assets/incomplete.png' alt='chore_incomplete' title='chore_status' style='width: 20px;'></div>";
    }

    return $sid;
}
// include "../settings/connection.php";

// $assign_id = mysqli_real_escape_string($con, $assign_id);

// $sql = "SELECT sid FROM Assignment
//         WHERE assignmentid = $assign_id";

// $result = mysqli_query($con, $sql);

// if ($result) {
//     $sid = mysqli_real_escape_string($con, $result);


//}


include "../actions/get_all_assignment_action.php";

$assigns = getAllAssignments();
// $test = json_encode($assigns);

// echo "<script>console.log($test)</script>";

if ($assigns->num_rows > 0) {
    $assignments = '';

    while ($row = $assigns->fetch_assoc()) {
        $assignments .= '<tr><td>' . $row['chorename'] . '</td><td>' . $row['fname'] . ' ' . $row['lname'] . '</td><td>' .
            $row['date_assign'] . '</td><td>' . $row['date_due'] . '</td><td>' . $row['sid'] .
            '</td><td><div class="actions"> <div class="status">' . getStatus($row['sid']) . '</div>
            <div class="delete"><a href="../actions/delete_assignment_action.php?assignmentid=' . $row['assignmentid'] . "'>
            <img src='../assets/delete.png' alt='delete' title='delete request' style='width: 20px;'></a></div></div>
            </td></tr>";
    }

    echo $assignments;
} else {
    echo "No chore assignments found.";
}


// echo "<tr>";
// echo "<td>" . getChoreName($row["cid"]) . "</td>";
// echo "<td>" . getPersonName($row["who_assigned"]) . "</td>";
// echo "<td>" . $row["date_assign"] . "</td>";
// echo "<td>" . $row["date_due"] . "</td>";
// echo "<td>" . $row["sid"] . "</td>";
// echo "<td>";
// echo "<div class='actions'>";
// // echo "<div class='edit'><a href='../admin/edit_chore_view.php?assignmentid=" . $row['assignmentid'] . "'><img src='../assets/pencil.png' alt='edit' title='edit request' style='width: 20px;'></a></div>";
// echo "<div class='status'>" . getStatus($row["sid"]) . "</div>";
// echo "<div class='delete'><a href='../actions/delete_assignment_action.php?assignmentid=" . $row['assignmentid'] . "'><img src='../assets/delete.png' alt='delete' title='delete request' style='width: 20px;'></a></div>";
// echo "</div>";
// echo "</td>";
// echo "</tr>";

//getChores();
