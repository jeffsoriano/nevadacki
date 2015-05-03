<?php
  include_once("db-connect.php");
  
  ob_start();
  session_start();
  
  if (!$_SESSION['signed_in'])
  {
    $_SESSION['flash_error'] = "Please sign in";
    ob_flush();
    header("Location: index.php");
    exit; // IMPORTANT: Be sure to exit here!
  }

  $username = mysql_real_escape_string($_SESSION['username']);
  
  $sql  = "SELECT * ";
  $sql .= "FROM Members ";
  $sql .= "WHERE un = '$username'";
  
  $member = mysql_query($sql);
  $memberSqlArr = mysql_fetch_array($member);
  
  $memberArr = array(
                  'id' => $memberSqlArr[0],
                  'lastName' => $memberSqlArr[1],
                  'firstName' => $memberSqlArr[2],
                  'currentRank' => $memberSqlArr[3],
                  'hours' => $memberSqlArr[4],
                  'hoursLeft' => $memberSqlArr[5],
                  'reqsMet' => $memberSqlArr[6],
                  'num_se' => $memberSqlArr[7],
                  'num_md' => $memberSqlArr[8],
                  'num_fr' => $memberSqlArr[9],
                  'num_ck' => $memberSqlArr[10],
                  'num_kf' => $memberSqlArr[11],
                  'num_in' => $memberSqlArr[12],
                  'num_dv' => $memberSqlArr[13],
                  'num_de' => $memberSqlArr[14],
                  'num_int' => $memberSqlArr[15],
                  'num_as' => $memberSqlArr[16],
                  'num_wb' => $memberSqlArr[17],
                  'num_ec' => $memberSqlArr[18],
                  'host_dw' => $memberSqlArr[19],
                  'cm' => $memberSqlArr[20],
                );          
?>

<!DOCTYPE html>

<html>
<head>
    <title>Nevada Circle K - MRP Info</title>
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
      <?php
      if ($_GET["passwordChanged"])
      {
          echo "<p>";
          echo "Password successfully changed.";
          echo "</p>";
      }
      
      echo "<h3>Membership data for " . $memberArr['firstName'] . " " . $memberArr['lastName'] . " </h3>";
      echo "<table class='table table-striped table-bordered'>";
        echo "<tr>";
          echo "<th>Current Rank</td>";
          echo "<th>Hours</td>";
          echo "<th>Hours Left</td>";
          echo "<th>Requirements Met</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td>" . $memberArr['currentRank'] . "</td>";
          echo "<td>" . $memberArr['hours'] . "</td>";
          echo "<td>" . $memberArr['hoursLeft'] . "</td>";
          echo "<td>" . $memberArr['reqsMet'] . "</td>";
        echo "</tr>";
      echo "</table>";
      
      echo "<table class='table table-hover table-bordered'>";
        echo "<tr>";
          echo "<th>Requirements</td>";
          echo "<th>Current</td>";
          echo "<th>Bronze</td>";
          echo "<th>Silver</td>";
          echo "<th>Gold</td>";
          echo "<th>Platinum</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># Socials</td>";
          echo "<td>" . $memberArr['num_se'] . "</td>";
          echo "<td>4</td>";
          echo "<td>4</td>";
          echo "<td>5</td>";
          echo "<td>6</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># MD&E Events</td>";
          echo "<td>" . $memberArr['num_md'] . "</td>";
          echo "<td>2</td>";
          echo "<td>2</td>";
          echo "<td>4</td>";
          echo "<td>4</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># Fundraisers</td>";
          echo "<td>" . $memberArr['num_fr'] . "</td>";
          echo "<td>2</td>";
          echo "<td>3</td>";
          echo "<td>4</td>";
          echo "<td>4</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># Circle K Hosted Events</td>";
          echo "<td>" . $memberArr['num_ck'] . "</td>";
          echo "<td>2</td>";
          echo "<td>3</td>";
          echo "<td>4</td>";
          echo "<td>4</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># Events with Kiwanis Family</td>";
          echo "<td>" . $memberArr['num_kf'] . "</td>";
          echo "<td>2</td>";
          echo "<td>3</td>";
          echo "<td>4</td>";
          echo "<td>5</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># Interclubs</td>";
          echo "<td>" . $memberArr['num_in'] . "</td>";
          echo "<td>4</td>";
          echo "<td>4</td>";
          echo "<td>5</td>";
          echo "<td>6</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># Divisional Events</td>";
          echo "<td>" . $memberArr['num_dv'] . "</td>";
          echo "<td>4</td>";
          echo "<td>4</td>";
          echo "<td>5</td>";
          echo "<td>6</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># District Events</td>";
          echo "<td>" . $memberArr['num_de'] . "</td>";
          echo "<td>1</td>";
          echo "<td>2</td>";
          echo "<td>3</td>";
          echo "<td>3</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># International Events</td>";
          echo "<td>" . $memberArr['num_int'] . "</td>";
          echo "<td>1</td>";
          echo "<td>1</td>";
          echo "<td>1</td>";
          echo "<td>1</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># Articles Submitted</td>";
          echo "<td>" . $memberArr['num_as'] . "</td>";
          echo "<td>1</td>";
          echo "<td>1</td>";
          echo "<td>2</td>";
          echo "<td>2</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># Webinars Attended</td>";
          echo "<td>" . $memberArr['num_wb'] . "</td>";
          echo "<td>2</td>";
          echo "<td>2</td>";
          echo "<td>3</td>";
          echo "<td>4</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td># Events Chaired</td>";
          echo "<td>" . $memberArr['num_ec'] . "</td>";
          echo "<td>1</td>";
          echo "<td>1</td>";
          echo "<td>2</td>";
          echo "<td>2</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td>Host District Workshop or Webinar</td>";
          echo "<td>" . $memberArr['host_dw'] . "</td>";
          echo "<td>Yes</td>";
          echo "<td>Yes</td>";
          echo "<td>Yes</td>";
          echo "<td>Yes</td>";
        echo "</tr>";
        
        echo "<tr>";
          echo "<td>Club Committee Member</td>";
          echo "<td>" . $memberArr['cm'] . "</td>";
          echo "<td>Yes</td>";
          echo "<td>Yes</td>";
          echo "<td>Yes</td>";
          echo "<td>Yes</td>";
        echo "</tr>";
      echo "</table>";
      
      echo "<p><a class='btn btn-default' role='button' href='logout.php'>Log out</a></p>";
      echo "<p><a class='btn btn-default' role='button' href='change-password-form.php'>Change password</a></p>";
      ?>
    </div>
  </body>

</html>

<?php
  ob_flush();
?>