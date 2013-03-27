<?php
  // create short variable names
  $resultDate = $_POST['resultDate'];
  $opponentFirstName = $_POST['opponentFirstName'];
  $opponentLastName = $_POST['opponentLastName'];
  $result = $_POST['result'];
  $resultType = $_POST['resultType'];
  $venue = $_POST['venue'];
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  $date = date('H:i, jS F Y');
?>

<html>
<head>
  <title>Wrestling Tracker - Entry Page</title>
</head>
<body>
<h1>Wrestling Tracker</h1>
<h2>Results Entry</h2>

<?php

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