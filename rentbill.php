<?php
session_start();
$user=$_SESSION['username'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'house_keeping');
$q="select rent_bill,rent,elec_bill,main_charge,total_amt,duedate,pay_made,pay_date,balance from rent_bill where user_id='$user' ";
$result=mysqli_query($con,$q);
mysqli_close($con);
?>
<html>
<head>
<link rel="stylesheet" href="table.css"></head>
<body>
<h1>VIEW RENT BILL</h1>
<table class="content-table">
<tr>
<th>Bill Number</th>
<th>Rent Charges</th>
<th>Electricity Bill Charges</th>
<th>Maintainence Charges</th>
<th>Total Amount</th>
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
<td><?php echo $row['rent_bill'];?></td>
<td><?php echo $row['rent'];?></td>
<td><?php echo $row['elec_bill'];?></td>
<td><?php echo $row['main_charge'];?></td>
<td><?php echo $row['total_amt'];?></td>
<td><?php echo $row['duedate'];?></td>
<td><?php echo $row['pay_made'];?></td>
<td><?php echo $row['pay_date'];?></td>
<td><?php echo $row['balance'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>