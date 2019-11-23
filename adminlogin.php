
<html>
<head>
<title>LOGIN PAGE</title>
<link rel="stylesheet" type="text/css" href="login.css" >
<style>
.avatar
{
	width:100px;
	height:100px;
	border-radius:50%;
	position:absolute;
	padding:0px 75px;
	top:-50px;
	left:calc(50% -50px);
	display: block;
	margin-left: auto;
	margin-right: auto;
}
</style>
</head>
<body>

<div class="loginbox">
<img src="user.jpg" class="avatar">
<h1>Login Here</h1>
<form action="adminvalidation.php" method="post">
<p>Username</p>
<input type="text" name="username" placeholder="Enter Username" required>
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password" required>
<input type="submit" value="Login">
</form>
</div>

</body>

</html>