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
	
<div id="wrapper"align="center" >
<br />
<div class="st">
<div>
<span class="SubHead" > <h2> Notice Broad</h2> </span>
<div id="wrapper2">
<div class="new">
	<h2 style="color:blue; text-align:left; padding:16px;">
		New
	</h2>
</div>
</div>

<div class="onlylogin">
<h3><p style="color: yellow;">  All B.Sc. students and teachers are informed to return the books issued from the library as soon as the issue date is over. 
    Students who do not return the books within the reservation date will be fined 5tk per book day from the date of return.</p> </h3>
    <br>  
    <div class="notice">
       <h2 style="color: yellow; text-align:left;"> 
        1. A book can be taken for a maximum of 6 months for students. <br>                   
        2. Students have to pay 50tk per book for 6 months.<br> 
        3. Students have to pay 20tk per book for 3 months.<br> 
        4. Students have to pay 10tk per book for 1 month.<br> 
        5. Students need not pay any money to borrow books for 15 days.
        </h2>
    </div>
      
      <h3><p style="color: yellow;">  N.B. Teachers are not required to pay any fee for borrowing books but if 
      they are unable to submit the books within the stipulated date then teachers are requested to inform the librarian.</p> </h3>
    <h1 style="color: yellow;"> Thanks You </h1>
</div>
</div>
<br>
<br>

</div>

</div>
</div>
<br>
<br>
</body>
</html>