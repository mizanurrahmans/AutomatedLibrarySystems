<?php
include("setting.php");
session_start();
if(!isset($_SESSION['sid']))
{
	header("location:index.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
$date=date('d/m/Y');
$bn=$_POST['name'];
$day=$_POST['day'];
if($bn!=NULL)
{
	$p=mysqli_query($set,"SELECT * FROM books WHERE id='$bn'");
	$q=mysqli_fetch_array($p);
	$bk=$q['name'];
	$ba=$q['author'];
	$sql=mysqli_query($set,"INSERT INTO issue(sid,name,author,date,day) VALUES('$sid','$bk','$ba','$date','$day')");
	
	if($sql)
	{
		$sql=mysqli_query($set, "UPDATE `books` SET `available`=`available`-1 WHERE name='$bk'");
		$msg="Successfully Issued";
	}
	else
	{
		$msg="Error Please Try Later";
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
<span class="head">Seminar Library System</span><br />
<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">Information and Communication Technology
</marquee>
</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Borrow Book</span>
<br />
<br />
<form method="post" action="">
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Book : </td><td><select name="name" class="fields" required >
<option value="" disabled="disabled" selected="selected"> - - Select Book - - </option>
<?php
$x=mysqli_query($set,"SELECT * FROM books");
while($y=mysqli_fetch_array($x))
{
	?>
<option value="<?php echo $y['id'];?>"><?php echo $y['name']." ".$y['author'];?></option>
<?php
}
?>
</select></td></tr>

<tr><td class="labels">Day : </td>
						<td>
						<select name="day" class="fields" required>
						<option value="" disabled="disabled" selected="selected">- - Select Day - -</option>
						<option value="180">6 months</option>
						<option value="90">3 months</option>
						<option value="30">1 month</option>
						<option value="15">15 day</option>
						</select>
						</td></tr>

<tr><td colspan="2" align="center"><input type="submit" value="CONFIRM" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="home.php" class="link">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>