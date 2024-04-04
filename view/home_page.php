<?php
include_once "../functions/home_fxn.php";
//include "../functions/get_all_assignment_fxn.php";

// $all_assignments = numOfAllAssignments();
// $inprogress = numOfAssignmentsInProgress();
// $incomplete_assignments = numOfIncompleteAssignments();
// $completed_assignments = numOfCompletedAssignments();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Work! - Home Page</title>
    <link rel="stylesheet" href="../css/home_page.css">
</head>
<body>
    <div class="navigation">
        <input type="checkbox" id ="check">
        <label for="check">
            <img src="../assets/menu.png" alt='menu image'>
        </label>

        <h2>Let's Work - A Chore Management System</h2>
        <ul>
            <li>
                <a href="../view/home_page.php">
                    <span class="icon"><img src='../assets/home_icon.png' alt='home' title='homepage' style='width: 20px;'></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="../admin/chore_control_view.php">
                    <span class="icon"><img src='../assets/plus.png' alt='add_chore' title='add_chore_page' style='width: 15px;'></span>
                    <span class="title">Add Chores</span>
                </a>
            </li>
            <li>
                <a href="../admin/assign_chore_view.php">
                    <span class="icon"><img src='../assets/pencil.png' alt='assign_chore' title='assign_chore_page' style='width: 15px;'></span>
                    <span class="title">Assign Chores</span>
                </a>
            </li>
            <li>
                <a href="../login/logout_view.php">
                    <span class="icon"><img src='../assets/logout.png' alt='logout' title='logout' style='width: 24px;'></span>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="home-page">
        <section class="statistics" onclick="navigateToChoreManagement()">
            <div class="status-box all-assignments">
                <p>All Assignments</p>
                <span><?php echo numOfAllAssignments(); ?></span>
            </div>    
            <div class="status-box in-progress">
                <p>In Progress</p>
                <span><?php numOfAssignmentsInProgress(); ?></span>
            </div>
            <div class="status-box incomplete">
                <p>Incomplete</p>
                <span><?php numOfIncompleteAssignments(); ?></span>
            </div>
            <div class="status-box completed">
                <p>Completed</p>
                <span><?php numOfCompletedAssignments(); ?></span>
            </div>
        </section>

        <br>
        <br>

        <section class="user-info">
            <h2>Welcome, User</h2>
        </section>

        <br>
        <br>

        <section class="upcoming-chores" >
            <h2 style="margin-top:2%"> Upcoming Chores</h2>
            <div><?php getRecentAssignments(); ?></div>
        </section>

        <!-- <div class="score">
            <p>Completion Score:</p>
            <span style="color: yellow;">50%</span>
        </div> -->

    </div>

    <script src="../js/home_page.js"></script>

</body>
</html>