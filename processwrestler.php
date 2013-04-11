<?php

  // create short variable names
 

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $class = $_POST['class'];
  
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

$insertWrestlerQuery = "INSERT INTO ".$dbName.".Wrestler ( FirstName, LastName, Class ) ".
					 "VALUES ( '".$firstName."', '".$lastName."','".$class."')";
					 
$insertResultCheck = $db->query($insertWrestlerQuery);

/* Displays error if the INSERT was not successful  */	
if (!$insertResultCheck) {
	echo "An error has occurred with the Insert Query.";
    }
	
 /* Displays the record values that were added */   

echo "<p>".$firstName."</p>";
echo "<p>".$lastName."</p>";
echo "<p>".$class."</p>";	

?>
</body>
</html>