<?php 

session_start();

session_unset();

header("Location: ../login/login_view.php");
exit();

?>

