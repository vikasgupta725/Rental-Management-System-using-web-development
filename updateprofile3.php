<?php
$name=$_POST['a1'];
$marital_status=$_POST['a3'];
$room_no=$_POST['a2'];
$advance_amt=$_POST['a4'];
$security_amt=$_POST['a5'];
$meter_no=$_POST['a6'];
$d_o_j=$_POST['a7'];
$contact_no=$_POST['a8'];
$email=$_POST['a9'];
$occ=$_POST['a10'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'house_keeping');
$q="UPDATE myprofile_db SET name='$name',marital_status='$marital_status',advance_amt='$advance_amt',security_amt='$security_amt',meter_no='$meter_no',date_of_joining='$d_o_j',contact_no='$contact_no',email='$email',occupation='$occ' where room_no='$room_no'";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>UPDATE PROFILE </title>
<style type="text/css">
body
{
background:url(vcx.jpg);
color:white;
font-size:20px;
font-weight:bold;
text-align:center;
padding:30px 50px;
}
</style>
</head>
<body>
<h1>UPDATE PROFILE<h1>
<p><?php 
if($status==1)
echo "Profile Updated Successfully";
else 
echo "Profile Updation Failed"; ?></p>
</body>
</html>
