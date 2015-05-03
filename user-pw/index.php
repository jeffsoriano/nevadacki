<?php
    $reasons = array("password" => "Wrong Username or Password");
?>

<!DOCTYPE html>

<html>
<head>
    <title>Nevada Circle K - Log In</title>
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
                    if ($_GET["loginFailed"])
                    {
                        echo "<p>";
                        echo $reasons[$_GET["reason"]];
                        echo "</p>";
                    }
                ?>
                <form method="post" action="signin.php"> 
                    <div class="form-group">
                        <label for="username">
                            Username
                        </label>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>