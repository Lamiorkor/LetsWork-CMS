<?php
include "../actions/get_all_assignment_action.php";               

//displaying chore statistics for:


//all assignments
function numOfAllAssignments() {
    $assignments = getAllAssignments(); 

    $count = 0;

    foreach ($assignments as $assignment) {
        if (mysqli_num_rows($assignment) > 0) {
            $count++;
        } else {
            $count = 0;
        }
    }
    return $count;
}


//all assignments in progress
function numOfAssignmentsInProgress() {
    $inprogress = getAssignmentsInProgress(); 

    $count = 0;

    foreach ($inprogress as $assignment) {
        if (mysqli_num_rows($assignment) > 0) {
            $count++;
        } else {
            $count = 0;
        }
    }
    return $count;
}

//all incomplete assignments
function numOfIncompleteAssignments() {
    $incomplete = getIncompleteAssignments(); 

    $count = 0;

    foreach ($incomplete as $assignment) {
        if (mysqli_num_rows($assignment) > 0) {
            $count++;
        } else {
            $count = 0;
        }
    }
    return $count;
}

//all completed assignments
function numOfCompletedAssignments() {
    $completed = getCompletedAssignments(); 

    $count = 0;

    foreach ($completed as $assignment) {
        if (mysqli_num_rows($assignment) > 0) {
            $count++;
        } else {
            $count = 0;
        }
    }
    return $count;
}
echo numOfAllAssignments();
?>