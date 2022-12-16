<?php
include("setting.php");
$aid=$_POST['aid'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pas=sha1($_POST['pass']);
if($aid==NULL ||$name==NULL || $phone==NULL || $email==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($set,"INSERT INTO admin(aid,name,phone,email,password) VALUES('$aid','$name','$phone','$email','$pas')");
	if($sql)
	{
		$msg="Successfully Registered";
	}
	else
	{
		$msg="User Already Exists";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seminar Library System</title>
<link href="./css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="banner">
		<div class="heading">
			<span class="head"> <a href="#"> <img src="./images/logo2.png"  width="50" height="50"> </a>  Seminar Library System</span>
			
		</div>
		<br>	
			<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">Information and Communication Technology</marquee>
	</div>
	<br>
		<div align="center">
			<div id="wrapper">			
				<br>				
					<div>
						<span class="SubHead">Admin Registration</span>
						<br />
						<br />
						<form method="post" action="">
						<table border="0" cellpadding="4" cellspacing="4" class="table">
						<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
                        <tr><td class="labels">Admin ID : </td><td><input type="text" name="aid" class="fields" placeholder="Enter Admin ID" required="required" size="25" /></td></tr>
						<tr><td class="labels">Name : </td><td><input type="text" name="name" class="fields" placeholder="Enter Full name" required="required" size="25" /></td></tr>
						<tr><td class="labels">Phone No : </td><td><input type="phone" name="phone" class="fields" placeholder="Enter Phone No" required="required" size="25" /></td></tr>
						<tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" placeholder="Enter Email ID" required="required" size="25" /></td></tr>
						
						<tr><td class="labels">Password : </td><td><input type="password" name="pass" class="fields" placeholder="Enter Password" required="required" size="25" /></td></tr>
						<tr><td colspan="2" align="center"><input type="submit" value="Register" class="fields" /></td></tr>
						</table>
						</form>
					</div> 
				<br>
				<a href="admin.php" class="link">Go Back</a>
				<br>
				<br>
			</div>
		</div>
</body>
</html>