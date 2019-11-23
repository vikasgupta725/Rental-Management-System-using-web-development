<?php
$name=$_POST['name'];
$marital_status=$_POST['marital_status'];
$room_no=$_POST['room_number'];
$advance_amt=$_POST['advance_amount'];
$security_amt=$_POST['security_amount'];
$meter_no=$_POST['meter_number'];
$d_o_j=$_POST['date'];
$contact_no=$_POST['contact_number'];
$email=$_POST['email'];
$occ=$_POST['occupation'];
$user_id=$_POST['username'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'house_keeping');
$q="insert into myprofile_db(room_no,name,marital_status,advance_amt,security_amt,meter_no,date_of_joining,contact_no,email,occupation,user_id)values($room_no,'$name','$marital_status','$advance_amt','$security_amt',$meter_no,'$d_o_j','$contact_no','$email','$occ','$user_id')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>PROFILE INSERTION </title>
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
<h1>RENTAL MANAGEMENT SYSTEM</h1>
<p><?php 
if($status==1)
echo "profile inserted successfully";
else 
echo "profile insertion failed"; ?></p>
</body>
</html>
