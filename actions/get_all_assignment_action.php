<?php

function getAllAssignments()
{
    include "../settings/connection.php";

    $sql = "SELECT a.assignmentid, a.cid, a.date_assign, a.date_due, a.who_assigned, 
            a.sid, status.sname, chores.chorename, People.fname, People.lname 
            FROM assignment a JOIN chores ON a.cid = chores.cid 
            JOIN assigned_people ON a.assignmentid = assigned_people.assignmentid 
            JOIN People ON assigned_people.pid = People.pid 
            JOIN status ON assignment.sid = status.sid";
    
    $result = mysqli_query($con, $sql);

    $var_data = $result; 

    return $var_data;
}




function getAssignmentsInProgress()
{
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
        }
    } else {
        echo "Query failed to execute";
    }
}

function getIncompleteAssignments()
{
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
        }
    } else {
        echo "Query failed to execute";
    }
}

function getCompletedAssignments()
{
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
        }
    } else {
        echo "Query failed to execute";
    }
}

function getRecentAssignments()
{
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
        }
    } else {
        echo "Query failed to execute";
    }
}

// getAllAssignments();
// getAssignmentsInProgress();
// getIncompleteAssignments();
// getCompletedAssignments();
// getRecentAssignments();



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
