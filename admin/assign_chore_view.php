<?php
include "../settings/core.php";
include "../functions/select_chore_fxn.php";
include "../functions/select_person_fxn.php";
include "../functions/get_all_assignment_fxn.php";

userIDSessionCheck();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEt's Work! - Assign Chore</title>
    <link rel="stylesheet" href="../css/assign_chore.css">
</head>
<body>

    <div class="navigation">
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
    
    <div class="assign-chore-container">
        <h1>Assign Chore</h1>

        <form id="assignChoreForm" action="../actions/assign_a_chore_action.php" method="POST">
            <label for="assignPerson">Assign Person:</label>
            <select id="assignPerson" name="assignPerson" required>
            <option value="">Select Person to Assign</option>
            <?php selectPerson(); ?>
            </select>

            <label for="assignChore">Assign Chore:</label>
            <select id="assignChore" name="assignChore" required>
            <option value="">Select Chore to Assign</option>
            <?php selectChore(); ?>
            </select>

            <!-- <label for="dateAssigned">Date Assigned:</label>
            <input type="date" id="dateAssigned" name="dateAssigned" required> -->
            
            <label for="dateDue">Date Due:</label>
            <input type="date" id="dateDue" name="dateDue" required>
            
            <button type="submit" name="submit" value="asg-chore">Assign Chore</button>
        </form>

        <table id="choreAssignmentTable">
            <thead>
                <tr>
                    <th>Chore Name</th>
                    <th>Assigned By</th>
                    <th>Date Assigned</th>
                    <th>Date Due</th>
                    <th>Chore Status</th>
                    <th>Actions</th>
                </tr>
                <?php getAllAssignments(); ?>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <!-- <script src="../js/assign_chore.js"></script> -->
</body>
</html>
