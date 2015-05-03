<?php
    session_start();
    
    $dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
    $dbuser = "nvckiorg_tech"; // the username that you created, or were given, to access your database
    $dbpass = "blarga"; // the password that you created, or were given, to access your database
     
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
    
    if ($conn != FALSE) {
        echo("login successful");
    }
    else {
        echo("login failed");
    }
    
?>