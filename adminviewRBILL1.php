<html>
<head>
<style type="text/css">
body
{
background:url(green.jpg);
font-size:15px;
color:white;
margin:0;
	padding:0;
	background-position:center;
	font-family:"Times New Roman",Times,serif;
	background-size:cover;
	background-repeat:no-repeat;
	background-attachment:scroll;
	position:center;
}
.box input[type="submit"]
{
	border:none;
	outline:none;
	height:40px;
	background:#fb2525;
	color:#fff;
	font-size:18px;
	border-radius:10px;
	width:100%;
	margin-top:20px;
	margin-bottom:20px;
	align-items:center;
	position:center;
}
.box
{
	width:350px;
	height:300px;
	background:indigo;
	color:black;
	top:50%;
	left:50%;
	position:absolute;
	transform:translate(-50%,-50%);
    box-sizing:border-box;
	padding: 30px 30px;
	font-weight:bold;
align-items:center;
box-shadow: 0px 0px 15px 3px rgba(0,0,0,1);
}
.box input[type="submit"]:hover
{
	cursor:pointer;
	background:#ffc107;
	color:#000;
}
input[type="text"],[type="number"]
{
	width:200px;
	height:30px;
	border-radius:10px;

}
td{
	font-size:20px;
	font-weight:bold;
}
</style>
</head>
<body>
<div class="box">
<h1>Enter The Details<h1>
<form action="adminviewRBILL2.php" method="POST">
<table>
<tr>
<td>Name</td>
<td><input type="text" name="b1" required/>
</td>
</tr>
<tr>
<td>Room Number</td>
<td><input type="number" name="b2" required/>
</td>
</tr>
<tr>
<td>
<input type="submit" value="SUBMIT"/>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>



