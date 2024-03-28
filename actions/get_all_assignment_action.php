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
            exit();
        }
    } else {
        echo "Query failed to execute";
        exit();
    }

    $con->close();

}

function getAssignmentsInProgress() {
    include "../settings/connection.php";

    $sql = "SELECT * FROM Assignment WHERE sid = 2";

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
            exit();
        }
    } else {
        echo "Query failed to execute";
        exit();
    }

    $con->close();

}

function getIncompleteAssignments() {
    include "../settings/connection.php";

    $sql = "SELECT * FROM Assignment WHERE sid = 4";

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
            exit();
        }
    } else {
        echo "Query failed to execute";
        exit();
    }

    $con->close();

}

function getCompletedAssignments() {
    include "../settings/connection.php";

    $sql = "SELECT * FROM Assignment WHERE sid = 3";

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
            exit();
        }
    } else {
        echo "Query failed to execute";
        exit();
    }

    $con->close();

}

function getRecentAssignments() {
    include "../settings/connection.php";

    $sql = "SELECT * FROM Assignment 
            WHERE sid = 2
            ORDER BY assignmentid DESC
            LIMIT 3";

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
            exit();
        }
    } else {
        echo "Query failed to execute";
        exit();
    }

    $con->close();

}



// function getChoreName() {
//     include "../settings.php";

//     $sql = "SELECT chorename FROM Chores";


// }

// function getPersonName() {
//     include "../settings/connection.php";

//     $sql = "SELECT fname FROM People";

//     $assigned_people = "SELECT * FROM Assigned_people";
//     $result2 = mysqli_query($con, $assigned_people);

//     foreach($result as $row) {
//         $sql2 = "SELECT P.fname,  
//                  FROM People 
//                  WHERE pid = $result2['pid']
//                  AND ";

            

//     }
// }




?>