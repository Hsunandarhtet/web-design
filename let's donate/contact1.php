<?php session_start();
if(isset($_SESSION['email'])){
    require('menusignin.php');
    }
    else{
        require('menu.php');
        }?>
<table>
	<tr>	
		<td>
		
		<p><h2  style="margin-left: 10%">Get in touch with us</h2></p>
				<table cellspacing=10  style="margin-left: 10%">
					<tr>
						<td>Phone Number:</td>
						<td>0152582585</td>
					</tr>
					<tr>
						<td>Address:</td>
						<td>No.321 afifhwifahiiri,ihhbiafai</td>
					</tr>
					<tr>
						<td>Email:</td>
						<td>ofhoofho@hgoao.oaf</td>
					</tr>
				</table>
			</td>
			<td>
			<div class="signup-page-main">
    		 	<div class="signup-main">  	
    			 <div class="signup-head">
					<h1>Contact Us</h1>
				</div>
				<div class="signup-block">
					<form action="signin.php" method="post">
						<input type="text" name="name" placeholder="Name" required="">
						<input type="text" name="email" placeholder="Email" required="">
						<input type="text" name="textarea" placeholder="Message" required="" width="30" height="60">
						<input type="submit" name="Submit" value="Submit">														
					</form>
				
				</div>
    			</div>
			</div>
		</td>
    </tr>
 </table>

<div class="copyrights">
   <h4>Made with <i class="fa fa-fw fa-heart"></i>, <i class="fa fa-fw fa-coffee"></i> & 
<i class="fa fa-fw fa-laptop"></i>.</a></h4>
    
</div> 
</body>
</html>