
<?php  
include('menusignin.php');
echo " 
<div class='bg'>
  <div style='margin-top: 20%' class='wow bounceInLeft'>
  <form  action='signup.php' method='post'>
    <h3 class='loginheader'>Sign Up</h3>
    <div class='container'>
       <table style='width: 80%;width: 80%;'>
       		<tr>
       			<td><label class='loginheader'><b>Username</b></label></td>
    			<td><input type='text' name='username' placeholder='Enter Username' required/></td> 
			</tr>
			<tr>
       			<td><label class='loginheader'><b>Email</b></label></td>
    			<td><input type='email' name='email' placeholder='Enter Email' required/></td> 
			</tr>
			<tr>
    			<td> <label class='loginheader'><b>Password</b></label></td>
      			<td><input type='password' name='password' placeholder='Enter Password' required/></td>
      		</tr>
      		<tr>
    			<td> <label class='loginheader'><b>Repeat Password</b></label></td>
      			<td><input type='password' name='repeatpassword' placeholder='Enter Repeat Password' required/></td>
      		</tr>
        </table>
      <button type='submit' name='submit' class='loginbutton' id='myBtn'>Sign Up</button>
      </div>
  </form>
	</div>
</div>
</div>
"?>
</body></html>