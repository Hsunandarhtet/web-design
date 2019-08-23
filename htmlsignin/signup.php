
<?php
include('dblink.php');
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$repeatpassword=$_POST['repeatpassword'];
$query1="SELECT * from Users WHERE email='$email'";
$ret1=mysql_query($query1,$con);
$norow=mysql_num_rows($ret1); 
if($norow==0)
{
	if($password==$repeatpassword)
	{
		$sql="INSERT INTO Users (username, email,password) VALUES('$username','$email','$password')";

		if (!mysql_query($sql,$con))
		{
			die('Error: ' . mysql_error());
		}
		echo "<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>";include('menu.php');
		
		echo "<h1 style='margin-left:40%;margin-top:20%;font_face:corbel;color:white;font-size:40px;' class='wow bounceInLeft'>Thank You!</h1><br>
		<p style='margin-left:37%;font-size:30px;color:white;' class='wow bounceInLeft'>Your Sign up is successful.</p>";
		echo "<br/><br/><a href='signin.php' 		style='margin-left:60%;text-decoration:none;font-size:20px;font-weight:italic;color:#23dbdb;'>Sign in</a>
</body>
		</html>
		";
	}
else
{
	echo "<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>";include('menu.php');
		
		echo "<h3 style='margin-left:10%;margin-top:20%;font_face:corbel;color:red;font-size:30px;' class='wow bounceInLeft'>Your repeat password is not match!</h3><br/><br/>";
	echo "<br/><br/><a href='signuppage.php' style='margin-left:50%;text-decoration:none;font-size:20px;font-weight:italic;color:white;' class='wow bounceInLeft'>Back</a>
	</body>
	</html>";
}
}
else{
	echo "<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>";include('menu.php');
		
		echo "<h3 style='margin-left:10%;margin-top:20%;font_face:corbel;color:red;font-size:30px;' class='wow bounceInLeft'>Your email is already signed up!</h3><br/><br/>";
	echo "<br/><br/><a href='signuppage.php' style='margin-left:50%;text-decoration:none;font-size:20px;font-weight:italic;color:white;' class='wow bounceInLeft'>Back</a>
	</body>
	</html>";
}
mysql_close($con);
?>
