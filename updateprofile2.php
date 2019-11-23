<?php
session_start();
$user=$_SESSION['username'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'house_keeping');
$q="select room_no,name,marital_status,advance_amt,security_amt,meter_no,date_of_joining,contact_no,email,occupation from myprofile_db where user_id='$user' ";
$result=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>VIEW PROFILE </title>
<link rel="stylesheet" href="form.css">
</head>
<body>
<div class="box">
<h1>Update Profile</h1>
<form action="updateprofile3.php" method="post">
<?php
while($row=$result->fetch_assoc())
{
?>
<table>
<tr><td>
Name <input type="text" name="a1" value="<?php echo $row['name']; ?>"/>
</td></tr>
<tr><td>
Room Number <input type="number" name="a2" value="<?php echo $row['room_no']; ?>"/>
</td></tr>
<tr><td>
Marital Status <input type="text" name="a3" value="<?php echo $row['marital_status']; ?>"/>
</td></tr>
<tr><td>
Advance Amount <input type="number" name="a4" value="<?php echo $row['advance_amt'];?>"/>
</td></tr>
<tr><td>
Security Amount <input type="number" name="a5" value="<?php echo $row['security_amt'];?>"/>
</td></tr>
<tr><td>
Meter Number <input type="number" name="a6" value="<?php echo $row['meter_no']; ?>"/>
</tr></td>
<tr><td>
Date Of Joining <input type="date" name="a7" value="<?php echo $row['date_of_joining'];?>"/>
</td></tr>
<tr><td>
Contact Number <input type="number" name="a8" value="<?php echo $row['contact_no']; ?>"/>
</td></tr>
<tr><td>
Email-Id <input type="text" name="a9" value="<?php echo $row['email'];?>"/>
</td></tr>
<tr><td>
Occupation <input type="text" name="a10" value="<?php echo $row['occupation']; ?>"/>
</td></tr>
<tr><td>
<input type="submit" value="update"/>
<td><tr>
</table>
<?php
}
?>
</form>
</div>
</body>
</html>
