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
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />

	<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 17%;
  padding: 15px;
  height: 310px; /* Should be removed. Only for demonstration */
}
.column2 {
  text-align: center;
  float: center;
  width: 83%;
  padding: 150px 0px;
  height: 200px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

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
<!-- 
<div class="row">
  <div class="column" style="background-color:rgba(0,0,0,0.7);">
  <div class="menu2">
				<ul style="list-style-type:none;">
				<li>	<a href="index.php">Home</a> </li> <br>
				<li>	<a href="admin.php">Admin Login</a>  </li> <br>
				<li>	<a href="onlyregister.php">Register</a> </li><br>
				<li>	<a href="onlylogin.php">Login</a> </li><br>
				<li>	<a href="total.php">Book View</a> </li><br>
				<li>	<a href="notice.php">Notice</a> </li><br>
				<li>	<a href="gallery.php">Gallery</a> </li>
				</ul>
			</div>
  </div>
  <div class="column2">
  <div align="">
		<h1 style="color:white;">Welcome to ICT Department</h1>
	</div>
  </div>
</div> 
       -->


	<div align="center">
		<br />
		<br>
		<br>
		<br>
		<br>
		<div align="">
			<h1 style="color:white;">Welcome to ICT Department</h1>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

			<div class="img">
					<a href="#"> <img src="./images/book/digitalp.jpg" alt="" width="230" height="300"> </a>
					<a href="#"> <img src="./images/book/digitals.jpg" alt="" width="230" height="300"> </a>
					<a href="#"> <img src="./images/book/dipr.jpg" alt="" width="230" height="300"> </a>
					<a href="#"> <img src="./images/book/dipw.jpg" alt="" width="230" height="300"> </a>
					<a href="#"> <img src="./images/book/pc.jpg" alt="" width="230" height="300"> </a>
			</div>
			<div class="img">
				<a href="#"> <img src="./images/book/mc.jpg" alt="" width="230" height="300"> </a>
				<a href="#"> <img src="./images/book/ai.jpg" alt="" width="230" height="300"> </a>
				<a href="#"> <img src="./images/book/sad.jpg" alt="" width="230" height="300"> </a>
				<a href="#"> <img src="./images/book/cg.jpg" alt="" width="230" height="300"> </a>
				<a href="#"> <img src="./images/book/cc.jpg" alt="" width="230" height="300"> </a>
			</div>
	</div>
	</body>
</html>