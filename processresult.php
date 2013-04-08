<?php
  // create short variable names
  $resultDate = $_POST['resultDate'];
  $opponentFirstName = $_POST['opponentFirstName'];
  $opponentLastName = $_POST['opponentLastName'];
  $result = $_POST['result'];
  $resultType = $_POST['resultType'];
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

    /*
    echo "<p>".$resultDate."</p>";
    echo "<p>".$opponentFirstName."</p>";
    echo "<p>".$opponentLastName."</p>";
    echo "<p>".$result."</p>";
    echo "<p>".$resultType."</p>";
    echo "<p>".$venue."</p>";
    */
	

?>
</body>
</html>