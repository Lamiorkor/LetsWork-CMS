<?php
session_start();
function userIDSessionCheck()
{
    if (session_status() != PHP_SESSION_ACTIVE && !isset($_SESSION['user_id'])) {
       header("Location: ../login/login_view.php");
       die("Session ended. Login again.");    
    }
}
