<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if($username=='admin'&& $password=='admin')
{$_SESSION['username']=$username;
header('location:http://localhost/project/adminhome.php');
}
else 
header('location:http://localhost/project/adminlogin.php');
?>