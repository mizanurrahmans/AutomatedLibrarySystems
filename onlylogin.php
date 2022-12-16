<?php
include("setting.php");
session_start();
if(isset($_SESSION['sid']))
{
	header("location:home.php");
}
$sid=mysqli_real_escape_string($set,$_POST['sid']);
$pass=mysqli_real_escape_string($set,$_POST['pass']);

if($sid==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$p=sha1($pass);
	$sql=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid' AND password='$p'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['sid']=$_POST['sid'];
		header("location:home.php");
	}
	else
	{
		$msg="Incorrect Details";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seminar Library System</title>
<link href=".//css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div id="banner">
	<div class="heading">
			<span class="head"> <a href="index.php"> <img src="./images/logo2.png"  width="50" height="50"> </a>  Seminar Library System</span>
			
			<div class="menu">
				<a href="index.php">Home</a>
				<a href="admin.php">Admin Login</a> 
				<a href="onlyregister.php">Register</a>
				<a href="onlylogin.php">Login</a>
				<a href="total.php">Book View</a>
				<a href="notice.php">Notice</a>
				<a href="gallery.php">Gallery</a>
			</div>
		</div>
 
		<br>
	<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">Information and Communication Technology</marquee>
	</div>	
			
<br />

<div align="center">
	<br/>
<div id="wrapper"align="center" >
<br />
<div class="st">
<div>
<span class="SubHead" > <h2> Teacher and Student Sign In </h2> </span>
<br>
<br>
<div class="onlylogin">
<a href="teacherlogin.php"> Teacher LogIn</a>
<a href="login.php"> Student LogIn</a>
</div>
</div>

</div>

<br />
<br />


</div>
</div>
</body>
</html>