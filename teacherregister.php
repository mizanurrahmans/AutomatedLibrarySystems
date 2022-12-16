<?php
include("setting.php");
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$sem=$_POST['sem'];
$branch=$_POST['branch'];
$sid=$_POST['sid'];
$pas=sha1($_POST['pass']);
if($name==NULL || $phone==NULL || $email==NULL || $sem==NULL || $branch==NULL || $sid==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($set,"INSERT INTO teachers(sid,name,phone,branch,sem,password,email) VALUES('$sid','$name','$phone','$branch','$sem','$pas','$email')");
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
						<span class="SubHead">Teacher Registration Form</span>
						<br />
						<br />
						<form method="post" action="">
						<table border="0" cellpadding="4" cellspacing="4" class="table">
						<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
						<tr><td class="labels">Name : </td><td><input type="text" name="name" class="fields" placeholder="Enter Full name" required="required" size="25" /></td></tr>
						<tr><td class="labels">Phone No : </td><td><input type="phone" name="phone" class="fields" placeholder="Enter Phone No" required="required" size="25" /></td></tr>
						<tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" placeholder="Enter Email ID" required="required" size="25" /></td></tr>

						<tr><td class="labels">Gender : </td>
						<td>
						<select name="sem" class="fields" required>
						<option value="" disabled="disabled" selected="selected">- - Select gender - -</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
						</select>
						</td></tr>

						<tr><td class="labels">Branch : </td>
						<td>
						<select name="branch" class="fields" required>
						<option value="" disabled="disabled" selected="selected">- - Select Branch - -</option>
						<option value="Computer Science and Engineering">Computer Science and Engineering</option>
						<option value="Electronics and Electrical Engineering">Electronics and Electrical Engineering</option>
						<option value="Information and Communication Technology">Information and Communication Technology</option>
						<option value="Applied Chemistry & Chemical Engineering">Applied Chemistry & Chemical Engineerin</option>
						<option value="Biomedical Engineering">Biomedical Engineering</option>
						</select>
						</td></tr>
						<tr><td class="labels">Teacher ID : </td><td><input type="text" name="sid" class="fields" placeholder="Enter Teacher ID" required="required" size="25" /></td></tr>
						<tr><td class="labels">Password : </td><td><input type="password" name="pass" class="fields" placeholder="Enter Password" required="required" size="25" /></td></tr>
						<tr><td colspan="2" align="center"><input type="submit" value="Register" class="fields" /></td></tr>
						</table>
						</form>
					</div> 
				<br>
				<a href="onlyregister.php" class="link">Go Back</a>
				<br>
				<br>
			</div>
		</div>
</body>
</html>