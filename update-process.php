<?php
    require_once("db-connect.php");
    
    $id = $_REQUEST['id'];
    $last = $_REQUEST['last'];
    $first = $_REQUEST['first'];
    $department = $_REQUEST['department'];
    $position = $_REQUEST['position'];
    $salary = $_REQUEST['salary'];
    
    $sql = "UPDATE employee SET " .
            "lastName = " . $last . ", " .
            "firstName = " . $first . ", " .
            "department = " . $department .  ", " .
            "position = " . $position . ", " .
            "salary = " . $salary . "WHERE id = '" . $id . "';";
    
    print($sql);
?>