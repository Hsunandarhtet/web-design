
<?php
    require('menusignin.php');
 ?>


<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Please fill the form</h1>
			</div>
			<div class="login-block">
				<form action="afd.php" method="post">
					<input type="text" name="weight" placeholder="Weight" required="">
					<p style="padding: 1% 2% 12% 2%;float: left;">Have you been donate blood?</p>
					<ul class="list">
					  <li class="list__item">
					   <input type="radio" class="radio-btn" name="blooddonate" id="a-opt" value="yes" />
					   <label for="a-opt" class="label">Yes</label>
					  </li>
					  <li class="list__item">
					   <input type="radio" class="radio-btn" name="blooddonate" id="b-opt" value="no" />
					   <label for="b-opt" class="label">No</label>
					  </li>
					  
					</ul>
					
					
					<input class="form-control" id="date" name="date" placeholder="Last Donation Date(MM/DD/YYYY)" type="text" disabled="disabled" />
					<input type="submit" name="mailto" value="Submit">	
			</div>
      </div>
</div>

<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
    <h4>Made with <i class="fa fa-fw fa-heart"></i>, <i class="fa fa-fw fa-coffee"></i> & 
    <i class="fa fa-fw fa-laptop"></i>.</a></h4>  
  </div>
<!--COPY rights end here-->
<script type="text/javascript">
                 $(document).ready(function() {
        $("input[name=blooddonate]:radio").click(function() { // attack a click event on all radio buttons with name 'radiogroup'


                if($(this).val() == 'yes') {//check which radio button is clicked 
                        $('#date').removeAttr("disabled");
                
                } else if($(this).val() == 'no') {
                      $('#date').attr("disabled", "disabled");
               
                } 
        });
});
                 </script>

<script type="text/javascript">
	$(function (){$('#datepick').datetimepicker();});
</script>

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


                      
						
