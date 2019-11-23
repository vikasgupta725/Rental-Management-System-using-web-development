<?php
$month=$_POST['b2'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'house_keeping');
$q="select *from bill_info  where bill_month='$month'";
$result=mysqli_query($con,$q);
mysqli_close($con);
?>
<html>
<head></head>
<body>
<h1>RENTAL MANAGEMENT SYSTEM</h1>
<h2>BILL OF THE MONTH</h2>
<table>
<tr>
<th>Bill Number</th>
<th>Name</th>
<th>Bill Month</th>
<th>Bill Amount</th>
<th>Due Date</th>
<th>Payment Made</th>
<th>Payment Date</th>
<th>Balance</th>
</tr>
<?php
while($row=$result->fetch_assoc())
{
?>
<tr>
<td><?php echo $row['bill_no'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['bill_month'];?></td>
<td><?php echo $row['bill_amt'];?></td>
<td><?php echo $row['due_date'];?></td>
<td><?php echo $row['payment_made'];?></td>
<td><?php echo $row['payment_date'];?></td>
<td><?php echo $row['balance'];?></td>
</tr>
<?php
}
?>
</table>
<p> Do u want to visit home page<a href ="home.php">Click Here</a></p>
</body>
</html>