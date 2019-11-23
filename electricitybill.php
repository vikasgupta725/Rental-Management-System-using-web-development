<?php
session_start();
$user=$_SESSION['username'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'house_keeping');
$q="select bill_no,pre_reading,cur_reading,fixed_charge,total_amt,bill_month,year from elec_bill where user_id='$user' ";
$result=mysqli_query($con,$q);
mysqli_close($con);
?>
<html>
<head>
<link rel="stylesheet" href="table.css"></head>
<body>
<h1>VIEW ELECTRICITY BILL</h1>
<table class="content-table">
<tr>
<th>Bill Number</th>
<th>Previous Reading</th>
<th>Current Reading</th>
<th>Fixed Charges</th>
<th>Total Amount</th>
<th>Bill Month</th>
<th>Year</th>
</tr>
<?php
while($row=$result->fetch_assoc())
{
?>
<tr>
<td><?php echo $row['bill_no'];?></td>
<td><?php echo $row['pre_reading'];?></td>
<td><?php echo $row['cur_reading'];?></td>
<td><?php echo $row['fixed_charge'];?></td>
<td><?php echo $row['total_amt'];?></td>
<td><?php echo $row['bill_month'];?></td>
<td><?php echo $row['year'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>