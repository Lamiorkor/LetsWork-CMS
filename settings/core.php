<?php

session_start();

function userIDSessionCheck() {  

    if (!isset($_SESSION['user_id'])) {
        header("Location:../login/login_view.php");
        die("Please login again");
    } 
}

function userRoleIDSessionCheck() {
    if(!isset($_SESSION['role_id'])) {
        return false;
    } else {
        return $_SESSION['role_id'];
    }
}

?>
