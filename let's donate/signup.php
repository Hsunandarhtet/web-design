
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="js/formden.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/w3css.css">
<link href="css/hovers.css" rel="stylesheet" media="all">
<link href="css/demo-page.css" rel="stylesheet" media="all">
<!--static chart-->



<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
<style type="text/css">
	th,td{
		padding : 15px;
	}
	/* Reset Select */
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: 2px 3px 4px rgba(0, 0, 0, .175);
  border: 0 !important;
  background-color: #f3f5f6;
  background-image: none;
}
/* Custom Select */
.select {
  position: relative;
  display: block;
  width: 20em;
  height: 3em;
  line-height: 3;
  background: #fff;
  overflow: hidden;
  border-radius: .25em;
}
select {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0 0 0 .5em;
  color: #000;
  cursor: pointer;
}
select::-ms-expand {
  display: none;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  padding: 0 1em;
  background: #f39c12;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: #fff;
}
.select::after {
  -webkit-transition: .25s all ease;
  transition: .25s all ease;
}
</style>
</head>
<body>	


<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->

<div class="signup-page-main">
     <div class="signup-main">  
    	 <div class="signup-head">
				<h1>Sign Up</h1>
			</div>
			<div class="signup-block">
				<form action="signin.php" method="POST" name="testform">
					Choose Profile picture : <input type="file" name="photo" id="photo" value="" required="" style="float: right;margin: 5% 0 5% 0" />
					<input type="text" name="username" placeholder="Name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<input class="form-control" id="date" name="date" placeholder="Date of birth(MM/DD/YYYY)" type="text" required=""/>
					<input type='tel' pattern="^\d{2}-\d{3}-\d{3}-\d{3,4}$" placeholder="09-XXX-XXX-XXXX" name="phno" required="">
					
				

<?Php


echo "<br>
<table>
<tr>
<td>
Choose City first 
</td>
<td>
<div class='select'>
<select name=cat id='s1' onchange=AjaxFunction();    required='' >
<option value='' disabled>Select City</option>

 ";


echo "<option value=1>Yangon</option><option value=2>Mandalay</option>";

?>
</select>
</div>
					</td>
					</tr>
					<tr>
					<td>
Choose Township 
</td>
<td>
<div class="select">
<select name=subcat id='s2' required="">

</select>
</div>
</td>
</tr>
<tr><td>
					<p style="margin: 1% 0 5% 0%;float: left;">Blood Type </p>
					</td>
					<td>
					<div class="select">
					    <select name="slct" id="slct">
					      <option disabled>Choose Blood Type</option>
					      <option value="1">O</option>
					      <option value="2">A</option>
					      <option value="3">B</option>
					      <option value="4">AB</option>
					      <option value="5">AB-</option>
					      <option value="6">AB+</option>
					    </select>
					 </div>
					</td>
					</tr>
					</table>
					<input type="submit" name="signup" value="Sign up">														
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="signin.php"> Sign in here.</a></h4>
				 <h4><a href="javascript:history.go(-1)">Go to back</a></h4>
				</div>
			</div>
</div>
</div>
<!--inner block end here-->
<script type="text/javascript">
	$(function (){$('#datepick').datetimepicker();});
</script>
    <script src="js/index.js"></script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
</body>
</html>


                      
						
