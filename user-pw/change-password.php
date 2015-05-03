<?php
    include_once("db-connect.php");
    include '../config/config.php';
    ob_start();
    session_start();
    
    mysql_query("ALTER TABLE Members CONVERT TO CHARACTER SET utf8");
    
    $username = mysql_real_escape_string($_SESSION['username']);
    $newPassword = mysql_real_escape_string($_POST['newPassword']);
    $newPasswordConfirm = mysql_real_escape_string($_POST['newPasswordConfirm']);
    $newPassword = md5($newPassword);
    $newPasswordConfirm = md5($newPasswordConfirm);
    
    // Compare passwords
        
        // Check if equal
        //echo $newPassword. "<br>" . $newPasswordConfirm . "<br>";
        //echo $username;
        if($newPassword == $newPasswordConfirm)
        {
            //echo "match is true";
            // Update password, set password changed to true, and return to dashboard
            $sql  = "UPDATE Members SET pw = '$newPassword' WHERE un = '$username'";
            if (mysql_query($sql))
            {
                header("Location: dashboard.php?passwordChanged=true&reason=success");
            }
            else
                echo "sql invalid";
        }
        
        // If not equal
        else
        {
            //echo "match is false";
            // Set matchFailed to true and return to form
            // Can't output text before using a header
            header("Location: change-password-form.php?matchFailed=true&reason=invalid");
        }

?>