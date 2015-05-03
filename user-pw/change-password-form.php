<?php

    ob_start();
    session_start();
    
    if (!$_SESSION['signed_in'])
    {
        $_SESSION['flash_error'] = "Please sign in";
        ob_flush();
        header("Location: index.php");
        exit; // IMPORTANT: Be sure to exit here!
    }

    $noMatch = array("invalid" => "Passwords do not match");
?>

<html>
<head>
    <title>Nevada Circle K - Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap-3.2.0/css/bootstrap.css" rel="stylesheet">
    <link href="../main.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../bootstrap-3.2.0/js/bootstrap.js"></script>
    <script src="../main.js"></script>
    <script src="../home.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <img src="../Images/cki-logo.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php
                    if ($_GET["matchFailed"])
                    {
                        echo "<p>";
                        echo $noMatch[$_GET["reason"]];
                        echo "</p>";
                    }
                ?>
                <form method="post" action="change-password.php">
                    <div class="form-group">
                        <label for="newPassword">
                            New password
                        </label>
                        <input type="password" class="form-control" name="newPassword">
                    </div>
    
                    <div class="form-group">
                        <label for="newPasswordConfirm">
                            Confirm password
                        </label>
                        <input type="password" class="form-control" name="newPasswordConfirm">
                    </div>
                        
                    <button type="submit" class="btn btn-default">Change Password</button>
                    <a class="btn btn-default" role="button" href="dashboard.php">Go back</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>