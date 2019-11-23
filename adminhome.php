<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="adminhome.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="menu">
<div class="left">
<h4>Rental Management System</h4>
</div>
<div class="right">
<h2>Welcome,<?php echo $_SESSION['username'];?></h2>
</div>
</div>
<div>
<ul>
<li>
<a href="profileinsertion1.php">
<div class="icon1">
<i class="fa fa-user-circle" aria-hidden="true"></i>
</div>
<div class="name" data-text="Insert Profile">Insert profile</div>
</a>
</li>
<li>
<a href="updateprofile2.php">
<div class="icon2">
<i class="fa fa-pencil-square" aria-hidden="true"></i>
</div>
<div class="name" data-text="Edit Profile" ">Edit profile</div>
</a>
</li>
<li>
<a href="viewprofile2.php">
<div class="icon3">
<i class="fa fa-eye" aria-hidden="true"></i>
</div>
<div class="name" data-text="View Profile">View Profile</div>
</a>
</li>
<li>
<a href="adminVRP1.php">
<div class="icon8">
<i class="fa fa-eye" aria-hidden="true"></i>
</div>
<div class="name" data-text="View Profile">View Renter Profile</div>
</a>
</li>
<li>
<a href="adminviewEBILL1.php">
<div class="icon4">
<i class="fa fa-money" aria-hidden="true"></i>
</div>
<div class="name" data-text="Electricity Bill Summary">Electricity Bill Summary</div>
</a>
</li>
<li>
<a href="adminviewRBILL1.php">
<div class="icon5">
<i class="fa fa-money" aria-hidden="true"></i>
</div>
<div class="name" data-text="Rent Bill Summary">Rent Bill Summary</div>
</a>
</li>
<li>
<a href="calendar.html">
<div class="icon6">
<i class="fa fa-calendar" aria-hidden="true"></i>
</div>
<div class="name" data-text="Calendar">Calendar</div>
</a>
</li>
<li>
<a href="logout.php">
<div class="icon7">
<i class="fa fa-sign-out" aria-hidden="true"></i>
</div>
<div class="name" data-text="Logout">Logout</div>
</a>
</li>
</ul>
</div>
</body>
</html>