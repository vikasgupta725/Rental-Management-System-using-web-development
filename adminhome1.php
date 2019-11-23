<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>home page</title>
</head>
<body>
<h1>RENTAL MANAGEMENT SYSTEM</h1>
<h2>Hello,<?php echo $_SESSION['username'];?></h2>
<a href="profileinsertion1.php">INSERT PROFILE</a><br/>
<a href="viewprofile2.php">VIEW PROFILE</a><br/>
<a href="adminVRP1.php">VIEW RENTER PROFILE</a><br/>
<a href="updateprofile2.php">UPDATE PROFILE</a><br/>
<a href="adminviewEBILL1.php">VIEW RENTER ELECTRICITY BILL</a><br/>
<a href="adminviewRBILL1.php">VIEW RENTER RENT BILL</a><br/>
<a href="calendar.html">MY CALENDAR</a><br/>
<a href="logout.php">LOGOUT</a><br/>
<body>
</html>