<?php
    include "db-connect.php";
    session_start();
    $_SESSION = array();
    session_unset();
    session_destroy();
?>

<meta http-equiv="refresh" content="0;index.php">