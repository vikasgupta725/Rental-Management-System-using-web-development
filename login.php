<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title></head>
<style>
body
{
background-color:yellow;}
#text1
{
background-color:green;
background-repeat:no-repeat;
background-size:50px 50px;
background-image:url('user.jpg');

}</style>
<body>
<h1>LOGIN HERE</h1>
<form action="validation.php" method="post">
<table>
<tr>
<td>
<input type="text" id="text1" name="username" placeholder="Username"/><td><tr>
<tr><td>
<input type="text" name="password" placeholder="Password"/>
</td></tr>
<tr>
<td><input type="submit" value="LOGIN"/>
<a href="newuser.php">REGISTER HERE</a>
</td></tr></table>
</form></body>
</html>