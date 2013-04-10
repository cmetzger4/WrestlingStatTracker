<?php

  // create short variable names
  $wrestlerID = 1;                        // *** NEED TO FIGURE OUT HOW WE ARE GOING TO CHOOSE THE CURRENT WRESTLER ***
  $resultDate = $_POST['resultDate'];     // *** Calendar date-picker for this on ResultEntry page for this? ***
  $opponentFirstName = $_POST['opponentFirstName'];
  $opponentLastName = $_POST['opponentLastName'];
  $opponentSchool = $_POST['opponentSchool'];
  $result = $_POST['result'];             // *** Need to create a drop-down menu on the ResultEntry Page for this *** 
  $resultType = $_POST['resultType'];     // *** Need to create a drop-down menu on the ResultEntry Page for this ***
  $weightClass = '106';                   // *** Need to create a drop-down menu on the ResultEntry Page for this ***
  $venue = $_POST['venue'];
  
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  
  // other variables
  $date = date('H:i, jS F Y');
  $dbHost = 'localhost';
  $dbName = '<ENTER DATABASE NAME HERE>';
  $dbUserName = '<ENTER DATABASE USERNAME HERE>';
  $dbPassword = '<ENTER DATABASE PASSWORD HERE>';
  
?>

<html>
<head>
  <title>Wrestling Tracker - Entry Page</title>
</head>
<body>
<h1>Wrestling Tracker</h1>
<h2>Results Entry</h2>

<?php

@ $db = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	
/* Remove this 'else' statement	once you know your connection settings work */
else{
	echo 'Connection Test was Successful!';
	}

$insertResultQuery = "INSERT INTO ".$dbName.".Match ( DateOfMatch, WrestlerID, Result, ResultType, WeightClass, OpponentFirstName, OpponentLastName, OpponentSchool, Venue ) ".
					 "VALUES ( '".$resultDate."', '".$wrestlerID."', '".$result."', '".$resultType."', '".$weightClass."', '".$opponentFirstName."', '".$opponentLastName."','".$opponentSchool."', '".$venue."')";
					 
$insertResultCheck = $db->query($insertResultQuery);

/* Displays error if the INSERT was not successful  */	
if (!$insertResultCheck) {
	echo "An error has occurred with the Insert Query.";
    }
	
 /* Displays the record values that were added */   
echo "<p>".$resultDate."</p>";
echo "<p>".$wrestlerID."</p>";
echo "<p>".$result."</p>";
echo "<p>".$resultType."</p>";
echo "<p>".$weightClass."</p>";
echo "<p>".$opponentFirstName."</p>";
echo "<p>".$opponentLastName."</p>";
echo "<p>".$opponentSchool."</p>";
echo "<p>".$venue."</p>";	

?>
</body>
</html>