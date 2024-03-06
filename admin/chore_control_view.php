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
    <title>Let's Work! - Add Chore</title>
    <link rel="stylesheet" href="../css/chore_control_view.css">
</head>

<body>
    <span style="margin:0; padding:0; margin-left:0%;"><a href="assign_chore_view.php">Assign Chore</a></span> 

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
                    <?php getChores(); ?>
                </table>
            </div>
        </div>


    </div>

    <script src="../js/chore_control_view.js"></script>
</body>

</html>