<?php 
include('dblink.php');

if(isset($_POST['submit']))
{
	$password=$_POST['password'];
	$username=$_POST['username'];

$query1="SELECT * from Users WHERE username='$username' AND password='$password'";
$ret1=mysql_query($query1,$con);
$norow=mysql_num_rows($ret1);
if($norow==0)
{
	echo "<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>";include('../html/menu.php');
		
		echo "<div class='bg'><h3 style='margin-left:10%;margin-top:20%;font_face:corbel;color:red;font-size:30px;' class='wow bounceInLeft'>Wrong username or password! Again.</h3><br/><br/>";
	echo "<br/><br/><a href='../html/signin.php' style='margin-left:50%;text-decoration:none;font-size:20px;font-weight:italic;color:white;' class='wow bounceInLeft'>Back</a>
	</div></body>
	</html>";
}
else
{
	header('Location: /workspace/iMovie/htmlsignin/indexsignin.php');
}
mysql_close($con);
}
elseif(isset($_POST['forget']))
{
	header('Location: /workspace/iMovie/htmlsignin/forgetpassword.php');
}
?>