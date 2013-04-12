<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php

  // create short variable names
  $wrestlerID = 1;                        // *** NEED TO FIGURE OUT HOW WE ARE GOING TO CHOOSE THE CURRENT WRESTLER ***
  $resultDate = $_POST['resultDate'];     // *** Calendar date-picker for this on ResultEntry page for this? ***
  $opponentFirstName = $_POST['opponentFirstName'];
  $opponentLastName = $_POST['opponentLastName'];
  $opponentSchool = $_POST['opponentSchool'];
  $result = $_POST['result'];             // *** added bullet type *** 
  $resultType = $_POST['resultType'];     // *** added bullet type ***
  $weightClass = $_POST['class'];                   // *** should be correct now ***
  $venue = $_POST['venue'];
  
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  
  // other variables
  $date = date('H:i, jS F Y');
  $dbHost = 'ucfsb.ucfilespace.uc.edu:3306';
  $dbName = 'gaierdj';
  $dbUserName = 'gaierdj';
  $dbPassword = 'your password goes here';
  
?>

<head>
<title>Moeller Wrestling</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div id="wrapper"><!-- create a div for a wrapper -->
<div id="banner"><!--create a div for banner/title -->
<h1> Moeller Wrestling </h1>
</div><!-- end banner -->
<div id="navigation"><!-- creating a div for links -->

<ul>
<li><a href="home.html">Home</a></li><!-- create a link to go to the home page -->
<li><a href="resultentry.html">Stat Entry</a></li><!-- create a link to go to the page to enter stats -->
<li><a href="wrestlerentry.html">Wrestler Entry</a></li><!-- create a link to enter a new wrestler -->
<li><a href="season.php">Season Stats</a></li><!-- create a link to go to the page to view current season stats -->
<li><a href="records.php">View Records</a></li><!-- create a link to go to the records page -->
</ul>
</div><!-- end navigation -->

<div id="content">
<h2>Wrestling Tracker</h2>
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
</div><!-- end content -->


<div id="footer"><!-- create div for footer -->
<h3>Archbishop Moeller High School&nbsp; &nbsp;| &nbsp; &nbsp; 9011 Montgomery Road &nbsp; &nbsp;| &nbsp; &nbsp; Cincinnati, OH &nbsp; &nbsp;| &nbsp; &nbsp; Head Coach: Jeff Gaier</h3>
</div><!--end footer -->
</div><!-- end wrapper -->

<div id="footer"><!-- create div for footer -->
<h3>Archbishop Moeller High School&nbsp; &nbsp;| &nbsp; &nbsp; 9011 Montgomery Road &nbsp; &nbsp;| &nbsp; &nbsp; Cincinnati, OH &nbsp; &nbsp;| &nbsp; &nbsp; Head Coach: Jeff Gaier</h3>
</div><!--end footer -->
</div><!-- end wrapper -->
</body>

</html>

