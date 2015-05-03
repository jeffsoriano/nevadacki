<?php
    include '../config/config.php';

    mysql_connect($host,$un,$pw) or die (mysql_error());
    //print("Connected to mySQL Database" . "<br/>");
    
    mysql_select_db($db_name) or die (mysql_error());
    //print("Connected to " . $db_name . " database. <br/>");
?>