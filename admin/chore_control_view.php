<?php
include "../settings/core.php";
userIDSessionCheck();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Work! - Add Chore</title>
    <link rel="stylesheet" href="../css/add_chore.css">
</head>
<body>
    <div class="signup-container">
        <h1>Add Chore</h1>

        <form id="addChoreForm" action="../actions/add_chore_action.php">
            <label for="choreName">Chore Name:</label>
            <input type="text" id="choreName" name="choreName" pattern="[A-Za-z0-9\s]+" required>
            
            <button type="button" onclick="addChore()">Add Chore</button>
        </form>

        <table id="choreTable">
            <thead>
                <tr>
                    <th>Chore ID</th>
                    <th>Chore Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script src="../js/add_chore.js"></script>
</body>
</html>
