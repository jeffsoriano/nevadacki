<?php
    include_once("db-connect.php");
    
    mysql_query("ALTER TABLE Members CONVERT TO CHARACTER SET utf8");
    
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    $password = md5($password);
    
    $sql  = "SELECT un ";
    $sql .= "FROM Members ";
    $sql .= "WHERE un = '$username' AND pw = '$password'";
    
    $checklogin = mysql_query($sql);
    $row = mysql_num_rows($checklogin);
    
    // clear out any existing session that may exist
    session_start();
    session_destroy();
    session_start();
    
    if ($row == 1)
    {
        $_SESSION['signed_in'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        //echo "Breakpoint success";
    }
    else
    {
        $_SESSION['flash_error'] = "Invalid username or password";
        $_SESSION['signed_in'] = false;
        $_SESSION['username'] = null;
        header("Location: index.php?loginFailed=true&reason=password");
        //echo "Breakpoint failure";
    }
?>
