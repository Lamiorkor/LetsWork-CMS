<?php 
include "../settings/core.php";
include "../actions/get_a_chore_action.php";

userIDSessionCheck();


if(isset($_GET['cid'])) {
    $cid = $_GET['cid'];

    $edit_chore = getOneChore($cid);

    if($edit_chore) {

    echo "<form id='editChoreForm' method='POST' action='../actions/edit_a_chore_action.php'>";
    echo "<input type='hidden' name='cid' value='$cid'>"; 
    echo "<label for='choreName'>Chore Name:</label>";
    echo "<input type='text' id='choreName' name='choreName' value='" . $edit_chore['chorename'] . "' pattern='[A-Za-z0-9\s]+' required>";
    echo "<button type='submit' name='submit' value='chore'>Update Chore</button>";
    echo "</form>";

    } else {
        echo "Please enter a chore";
        header("Location: ..admin/chore_control_view.php");
    }

} else {
    header("Location: ../admin/chore_control_view.php");
}



?>