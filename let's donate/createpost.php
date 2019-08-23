 <?php
    require('menusignin.php');
 ?>	


<!--inner block start here-->
<div class="signup-page-main">
 <div class="signup-main">  	
    	<div class="signup-head">
				<h1>Create post</h1>
			</div>
			<div class="signup-block">
				<form action="afd.php" method="post">
					<table>
					<tr>
					<td>
					 <p style="padding: 4% 2%">Blood Type</p>
					 </td>
					 <td>
						 <div class="select">
						<select name="bloodtype" onclick="return false;" id="">
							<option value=""  disabled="">Choose Blood Type</option>
							<option value="1">O</option>
							<option value="2" >A</option>
							<option value="3">B</option>
							<option value="4">AB</option>
							<option value="5">AB-</option>
							<option value="6">AB+</option>
						 </select>
						
					</div>
					</td>
					</tr>
					<tr>
					<td>
					<p>Post's type :   </p>
					</td>

					<td>
					<ul class="list"  style="margin-top: 30px;" required="">
					  <li class="list__item">
					   <input type="radio" class="radio-btn" name="choise" id="a-opt" />
					   <label for="a-opt" class="label">Blood</label>
					  </li>
					  <li class="list__item">
					   <input type="radio" class="radio-btn" name="choise" id="b-opt" />
					   <label for="b-opt" class="label">Liver</label>
					  </li>
					  <li class="list__item">
					   <input type="radio" class="radio-btn" name="choise" id="c-opt" />
					   <label for="c-opt" class="label">Kidney</label>
					  </li>
					</ul>
					</td>
					</tr>
					</table>
 <input type='tel' pattern="^\d{2}-\d{3}-\d{3}-\d{3,4}$" placeholder="09-XXX-XXX-XXXX" name="phno" required="">
					<textarea name="message" rows="8" cols="30" style="margin: 4% 2%">Description...</textarea>
					<input type="submit" name="createpost" value="Create Post">														
				</form>
				
			</div>
    </div>
    </div>
    
     <script src="js/index.js"></script>
     </body>
     </html>