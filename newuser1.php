<?php
$name=$_POST['name'];
$room_no=$_POST['room_no'];
$user_name=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'house_keeping');
$q="insert into login(name,room_no,username,password)values('$name','$room_no','$user_name','$password')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>REGISTERED SUCCESSFULLY </title>
<style type="text/css">
body
{
background:url(vcx.jpg);
color:white;
font-size:30px;
font-weight:bold;
text-align:center;
padding:30px 50px;
}
</style>
</head>
<body>
<p><?php 
if($status==1)
echo "Registered Successfully";
else 
echo "Registration Failed"; ?></p>
</body>
</html>
