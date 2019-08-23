<?php 
    require('menusignin.php'); 
?>
<style type="text/css">
	td{
		padding:15px;
	}
</style>

<script type="text/javascript">
function AjaxFunction()
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
		  try
   			 		{
   				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    				}
  			catch (e)
    				{
    			try
      		{
      		httpxml=new ActiveXObject("Microsoft.XMLHTTP");
     		 }
    			catch (e)
      		{
      		alert("Your browser does not support AJAX!");
      		return false;
      		}
    		}
  }
function stateck() 
    {
    if(httpxml.readyState==4)
      {
//alert(httpxml.responseText);
var myarray = JSON.parse(httpxml.responseText);
// Remove the options from 2nd dropdown list 
for(j=document.testform.subcat.options.length-1;j>=0;j--)
{
document.testform.subcat.remove(j);
}


for (i=0;i<myarray.data.length;i++)
{
var optn = document.createElement("OPTION");
optn.text = myarray.data[i].subcategory;
optn.value = myarray.data[i].subcat_id;  // You can change this to subcategory 
document.testform.subcat.options.add(optn);

} 
      }
    } // end of function stateck
	var url="dd.php";
var cat_id=document.getElementById('s1').value;
url=url+"?cat_id="+cat_id;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateck;
//alert(url);
httpxml.open("GET",url,true);
httpxml.send(null);
  }
</script>
<div class="inner-block">

<h2 style="top: 0%;padding-bottom: 5%">user-name's Information</h2>
<div class="row justify-content-around">
	<div class="col-md-9">
	<div class="row"  style="margin-top:4em;margin-left: 4%;">
			<div class="malorm-bottom" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);width: 80%">
				<img src="images/b3.png" class="malorum-pro"/>
			     
				 <h4 style="margin-left: 6.5em">User's name</h4>
				<table>
				<tr>
				<td>
					<spam style="color:#FC8213">Date fo birth  :  </spam></td><td contenteditable="true"> 4/11/19990</td>
					</tr>
					<tr>
					<td>
					<spam style="color:#FC8213">Blood type  :  </spam></td><td contenteditable="true"> AB- </td>
					</tr>
					<tr>
					<td>
					<spam style="color:#FC8213">Phone  :  </spam></td><td contenteditable="true"> 09-152-369-1259</td>
					</tr>
					<tr>
					<td>
					<spam style="color:#FC8213">Email  :  </spam></td><td contenteditable="true">user@gmail.com</td>
					</tr>
					<tr>
					<td>
					<spam style="color:#FC8213">Address  :  </spam> </td><td>
					<?Php

						require "connect.php";// connection to database 

						echo "<br>
						<div class='select'>
						<select name=cat id='s1' onchange=AjaxFunction();    required='' >
						<option value='' disabled>Select City</option>

						 ";

						$sql="select * from location "; // Query to collect data from table 

						foreach ($connect->query($sql) as $row) {
						echo "<option value=$row[cat_id] >$row[category]</option>";
						}
						?>
						</select>
						</div>
						<div class="select" style="margin-top:10px">
						<select name=subcat id='s2' required="">
						</select>
						</div>
						
					</td>
					</tr>
					</table>
				<button class="hvr-underline-from-center" style="float: right;color:#FC8213;width: 15%;border-radius: 5px;border:none;">Save</button>
				<a href="javascript:history.go(-1)" class="hvr-underline-from-center" style="float: right;color:#FC8213;width: 15%;border-radius: 5px;"/>Cancel</a>
				<br>
			</div>
		</div>
		

		</div>

	</div>
</div>
<div class="copyrights">
   <h4>Made with <i class="fa fa-fw fa-heart"></i>, <i class="fa fa-fw fa-coffee"></i> & 
<i class="fa fa-fw fa-laptop"></i>.</a></h4>
    
</div> 
