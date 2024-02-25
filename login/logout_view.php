<?php 

session_start();

?>

<?php

session_unset();

header("Location: ../login/login_view.php");
exit();

?>

