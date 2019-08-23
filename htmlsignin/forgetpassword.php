<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="common.css"
/>
</head>
<body>
<?php
if ( isset( $_POST["step"] ) and $_POST["step"] >= 1 and
$_POST["step"]
<= 2 ) {
call_user_func( "processStep" . (int)$_POST["step"] );
} else {
displayStep1();
}
function setValue( $fieldName ) {
if ( isset( $_POST[$fieldName] ) ) {
echo $_POST[$fieldName];
}
}
function processStep1() {
displayStep2();
}
function processStep2() {
if ( isset( $_POST["submitButton"] ) and
$_POST["submitButton"] ==
"< Back" ) {
displayStep1();
} else{
displayThanks();

}
}
function displayStep1() {
	include('../html/menu.php');

?>
<div class="bg">
<form action="forgetpassword.php" method="post" style="margin-top: 20%;">
<div style="width: 30em;">
<input type="hidden" name="step" value="1" />
<input type="hidden" name="password" value="<?php setValue
( "password" ) ?>" />
<label for="userName" style="padding: 20px; color:#fff;">Enter Your Email</label><br/>
<input type="email" name="userName" id="userName" style="margin-left: 30px;width: 300px;" value="<?php setValue( "userName" ) ?>" />
<input type="submit" name="submitButton" class="searchbtn" value="Next &gt;" />
</div>
</div>
</form>
</div>
<?php
}
function displayStep2() {
	include('../html/menu.php');
?>
<div class="bg">
<form action="forgetpassword.php" method="post" style="margin-top: 20%;">
<div style="width: 30em;">
<input type="hidden" name="step" value="2" />
<input type="hidden" name="userName" value="<?php setValue
( "userName" ) ?>" />
<label for="userName" style="padding: 20px; color:#fff;">Enter Change Password</label><br/>
<input type="password" name="password" id="password" style="margin-left: 30px;width: 300px;" value="
<?php setValue ( "password" ) ?>" />
<input type="submit" name="submitButton" class="searchbtn" value=
"Next &gt;" />
</div>
</div>
</form>
</div>
<?php
}
function displayThanks() {
	include('../html/menu.php');
?>
<div class="bg">
<?php  
include('dblink.php');
$email=$_POST['userName'];
$password=$_POST['password'];
$sql="update Users set password='$password' where email='$email'";
$result=mysql_query($sql,$con);
if($result)
{
	echo 
		"<div class='bg'><h1 style='margin-left:40%;margin-top:20%;font_face:corbel;color:white;font-size:40px;' class='wow bounceInLeft'>Thank You!</h1><br>
		<p style='margin-left:37%;font-size:30px;color:white;' class='wow bounceInLeft;color:white;' class='wow bounceInLeft'>Password Changing is successful.</p>";
		echo "<br/><br/><a href='movieActionsignin.php' 		style='margin-left:60%;text-decoration:none;font-size:20px;font-weight:italic;color:#23dbdb;'>Go to Page</a></div>";

}
else{
	echo "fail";
}
?>
</div>
<?php
}
?>
?>