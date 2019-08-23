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
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!--static chart-->


</head>
<body>	

<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left" style="width: 40%">
							<div class="logo-name">
									 <a href="index.php"><h1>Let's donate</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
						 </div>
						 <div class="header-right" style="width: 50%">
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img" ><img src="images/b3.png" alt="" style="border-radius: 50%;height: 50px;width: 50px;"> </span> 
												<div class="user-name">
													<p>user's name</p>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu" style="right: 50px;">
											 
											<li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="index.php?logout='1'"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
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
    <div class="sidebar-menu" style="position: fixed;background-color: #FC8213;" >
		  	<div class="logo"> <a href="#" class="sidebar-icon"  style="background-color:maroon; "> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		       
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
<script src="js/index.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

</body>
</html>                  