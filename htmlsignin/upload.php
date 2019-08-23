<?php include("menusignin.php"); ?>
<div class="bg height">   
  <div style="margin-top: 20%">
  <form name="f1" action="yoursceenplay.php" method="post" onSubmit="p()">

    <div class="container"><table border=0>
    <tr>
    <table style="width: 100%;height: 100%;">
    <tr>
    <td><label class="loginheader"><b>Title</b></label></td>
    <td><input id="txt" type="text" placeholder="Enter Title" required/></td> 
	</tr>
	<tr>
     <td> <label class="loginheader"><b>Genre</b></label></td>
      <td><select name="genre" id="gen" style="height: 40px; width: 150px;">
      		<option value= "action" id="oA">Action</option>
            <option value= "adventures" id="oA">Adventures</option>
            <option value= "comedy" id="oA">Comedy</option>
            <option value= "crime" id="oA">Crime</option>
            <option value= "drama" id="oA">Drama</option>
            <option value= "fantasy" id="oA">Fantasy</option>
            <option value= "horror" id="oA">Horror</option>
            <option value= "romance" id="oA">Romance</option>
            <option value= "sci_fi" id="oA">Sci_fi</option>
            <option value= "myanmar" id="oA">Myanmar</option>
           </select>
      
      
      
      <!--<div id="menu">
	<ul>
	      <li><a href="tutorialsAlpha.htm">Tutorials</a> 
		      <ul>
		        <li><a href="#"><input type="radio" name="Action" id="rA">Action</a></li>
		        <li><a href="#">Comedy</a></li>
		        <li><a href="#">Drama</a></li>
  		    </ul>
  		  </li>
	</ul>
			</div>--></td> </td>
      </tr>
      <tr>
     <td> <label class="loginheader"><b>Entry</b></label></td>
     
      </tr> 
        </table>
        
        </tr>
        <tr>
        <td><textarea id = "myTextArea"  placeholder="*Enter your story here*" required>
			</textarea> </td>
        </tr>
        
        <tr align="center">
        <td ><br><button type="submit" class="searchbtn">Submit</button></td>
        </tr>
        </table>
      </div>
  </form><script type="text/javascript">
		      						function p( ){
										var t = document.getElementById("txt").value;
										var g = document.getElementById("gen").value;
										var ta = document.getElementById("myTextArea").value;
										sessionStorage.setItem("title",t);
										sessionStorage.setItem("genre",g);
										sessionStorage.setItem("texta",ta);
										alert(g);
									}
 								</script>
	</div>
    
</div>

</body></html>