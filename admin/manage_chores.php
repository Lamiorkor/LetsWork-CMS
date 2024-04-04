<?php
include "../settings/core.php";
include "../functions/get_chore_fxn.php";


userIDSessionCheck();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Work! - Manage Chores</title>
    <link rel="stylesheet" href="../css/chore_control_view.css">
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
                <a href="../admin/manage_chores.php">
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

    <div class="chore-container">
        <h1>Add Chore</h1>
        
        <form id="addChoreForm" action="../actions/add_chore_action.php" method="POST">
            <label for="choreName">Chore Name:</label>
            <input type="text" id="choreName" name="choreName" pattern="[A-Za-z0-9\s]+" required>

            <button type="submit" name="submit">Add Chore</button>
        </form>

        <div class="lsection">
            <div class="chores">Chore List</div>
            <div class="ann">
                <table class="chores-table">
                    <tr>
                        <th>Chore Names</th>
                        <th>Actions</th>
                    </tr>
                    <?php getChores_Admin(); ?>
                </table>
            </div>
        </div>


    </div>

    <script src="../js/chore_control_view.js"></script>
</body>

</html>