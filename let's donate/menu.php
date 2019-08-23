<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/w3css.css">
<link href="css/hovers.css" rel="stylesheet" media="all">
<link href="css/demo-page.css" rel="stylesheet" media="all">
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="js/formden.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name"  style="width:80% !important" >
									 <a href="index.php"><h1>Let's donate</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							
							<div class="clearfix"> </div>
						 </div>
						 
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->

<!--slider menu-->
    <div class="sidebar-menu" style="position: fixed;" >
		  	<div class="logo"> <a href="#" class="sidebar-icon" style="background-color:maroon; "> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="signin.php"><i class="fa fa-sign-in"></i><span>Sign in</span></a></li>
		        <li id="menu-home" ><a href="signup.php"><i class="fa fa-pencil"></i><span>Sign Up</span></a></li>
		        <li id="menu-home" ><a href="charities.php"><i class="fa fa-users"></i><span>Charities</span></a></li>
		        <li id="menu-home" ><a href="afd.php"><i class="fa fa-paper-plane-o"></i><span>Ask for donation</span></a></li>
		          <li id="menu-home" ><a href="contact1.php"><i class="fa fa-tty"></i><span>Contact Us</span></a></li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>

<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                  