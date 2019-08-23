
<?php 
if(!isset($_POST['forget'])){
include('menusignin.php');
echo " 
<div class='bg'>
  <div style='margin-top: 20%' class='wow bounceInLeft'>
  <form  action='../htmlsignin/indexsignin.php' method='POST'>
     <h3 class='loginheader'>Sign In</h3>

    <div class='container'>
    <table style='width: 80%;width: 80%;'>
    <tr>
    <td><label class='loginheader'><b>Username</b></label></td>
    <td><input type='text' placeholder='Enter Username' name='username' required/></td> 
      
	</tr>
	<tr>
     <td> <label class='loginheader'><b>Password</b></label></td>
      <td><input type='password' placeholder='Enter Password' name='password' required /></td>
      </tr>
        </table>
      <button type='submit' class='loginbutton' name='forget'>Forget Password</button>
      <button type='submit' class='loginbutton' name='submit'>Sign in</button>
      </div>
  </form>
	</div>
</div>
</div>
</body></html>";
}
?>    

