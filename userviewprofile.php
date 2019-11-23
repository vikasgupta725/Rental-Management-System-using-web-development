<?php
$session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'house_keeping');
$q="select *from myprofile_db where userid='$_SESSION['username']";
$result=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>VIEW PROFILE </title>
<link rel="stylesheet" href="userviewprofiledesign.css">

</head>
<body>
<h1>VIEW PROFILE</h1>
<?php
while($row=$result->fetch_assoc())
{
echo"Name:{$row['name']}".'<br/>';
echo"Room Number:{$row['room_no']}".'<br/>';
echo"Gender:{$row['gender']}".'<br/>';
echo"Advance Amount:{$row['advance_amt']}".'<br/>';
echo"Security Amount:{$row['security_amt']}".'<br/>';
echo"Meter Number:{$row['meter_no']}".'<br/>';
echo"Date Of Joining:{$row['date_of_joining']}".'<br/>';
echo"Contact Number:{$row['contact_no']}".'<br/>';
echo"Email:{$row['email']}".'<br/>';
echo"occupation:{$row['occupation']}".'<br/>';

}
?>
</body>
</html>
