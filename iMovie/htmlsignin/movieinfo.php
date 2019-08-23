<?php include('menusignin.php');?>
<div class="bg">    
	<div class="topdiv"></div>
	<h2 class="headname">Beauty and The Beast</h2><br>
	<div class="container-fluid wow fadeInUp">
	<div class="row">
		<div class="col-sm-6" >
			<p style="line-height: 30px;color: #fff;font-size: 18px;padding: 20px;">
			Directors : <br><a href="#" class="movieinfolink">Bill Condon</a><br>
			Actors     :<br> <a href="#" class="movieinfolink">Emma Watson</a> as  Belle,<a href="#" class="movieinfolink"> bHattie Morahan </a> as Agathe/Enchantress , <a href="#" class="movieinfolink">Haydn Gwynne </a> as Clothilde ,  <a href="#" class="movieinfolink">Emma Thompsom </a> as Mrs. Potts <br>
			Actresses    : <br><a href="#" class="movieinfolink">Dan Stevens </a> as Beast ,<a href="#" class="movieinfolink"> Luke Evans </a> as Gaston , <a href="#" class="movieinfolink">Josh Gad</a> as LeFou ,  <a href="#" class="movieinfolink">Kevin Kline</a> as Maurice <br>
			Producer     : <br><a href="#" class="movieinfolink">Steve Gaub </a> ....  Co-producer<br>
			<a href="#" class="movieinfolink">Steve Gaub </a> ....  Co-producer<br>
			Screenwriter : <br><a href="#" class="movieinfolink">Stephen Chbosky </a> and<a href="#" class="movieinfolink"> Evan Spiliotopoulos </a><br>
			Time         : 1:22:00<br>
			Released Date: 4 / 17 / 2017
			Rating       : 7.5/10
			</p>

			<div style="width: 100%; display: inline-block;border-bottom: 2px solid #23dbdb;"></div>
			<p class="infoheadtext">Brief Description<br></p>
			<p style="color: #23dbdb;font-size: 15px;padding: 20px;">Belle ( Emma Watson ), a bright, beautiful and indenpendent young woman, is taken prisoner by a beast( Dan Stevens ) in its castle. Despite her fears, she befriends the castle's enchantedt staff and learns to look beyond the beast's hideous exterior, allowing her to recognize the kind heart and soul of the true prince that hides on the inside.</p><br>
			<p class="infoheadtext"> Give Rating : </p>
			<div class="stars">
  									<form action="">
									    <input class="star star-5" id="star-5" type="radio" name="star"/>
									    <label class="star star-5" for="star-5"></label>
									    <input class="star star-4" id="star-4" type="radio" name="star"/>
									    <label class="star star-4" for="star-4"></label>
 									   <input class="star star-3" id="star-3" type="radio" name="star"/>
 									   <label class="star star-3" for="star-3"></label>
									    <input class="star star-2" id="star-2" type="radio" name="star"/>
 									   <label class="star star-2" for="star-2"></label>
									    <input class="star star-1" id="star-1" type="radio" name="star"/>
 									   <label class="star star-1" for="star-1"></label>
						 			 </form>

									</div>

		</div>
		<div class="col-sm-4">
			<img src="../images/BandtheB.jpg" class="infoimg"><br>
			<div class="div"><table><tr><td style="width:150px;"><p><a href="../imageframe/imageframe.html"  class="imagelink"><span>More Images</span></a></p></td><td><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="imagelink trailerbutton"><span>Watch Trailer</span></button></td></tr></table>
			</div>

<div id="id01" class="modal">
  
  <form class="modal-content ">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     	<h1 class="imagelink">Beauty and The Beast</h1>
    </div>

    <div class="container">
     	<video width="800" controls style="margin-left: 10%;">
  				<source src="..\movie\Chelsea_Cutler_-_Sixteen_(Lyrics___Lyric_Video).mp4" type="video/mp4">
			</video>
    </div>

   
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

		</div>
		</div>
		
		<div style="width: 100%; display: inline-block;border-bottom: 2px solid #23dbdb;"></div>
		 <h3 class="infoheadtext" style="text-align: center;">Write Comment</h3>


<table style="margin-left:30%;padding: 20px;">
<tr>
<td>
<input type="text" id="myText" size="55" placeholder="*Enter your name here*" required>
</td>
</tr>
<tr align="center">
<td>
<textarea id = "myTextArea" cols="75" rows="5" placeholder="*Enter your comment here*" required>
</textarea>
</td>
</tr>
<tr>
<td>
<input type="submit" id="myBtn" value="Submit" class="searchbtn"><br>
</td>
</tr>
</table>
<h3 style="text-align: center;color: #fff;padding: 20px;margin-top: 8%;">Comments</h3>
<dl id="tbody" >
	<dt ></dt>
		
		<dd><br/></dd>

</dl>
<script type = "text/javascript">

	var div = document.getElementById("myDiv");

	var btn = document.getElementById("myBtn");
	var tbody = document.getElementById("tbody");
	var b = document.createElement("b");
	

	btn.onclick = function(){
		
			var textn = document.getElementById("myText");
			var textarea = document.getElementById("myTextArea");
			var name = textn.value;
			
			var txt = textarea.value;	
			
			var col1 = document.createElement("dt");
			col1.style.backgroundColor="#333";
			col1.style.color="white";
			col1.style.marginLeft="20%";
			col1.style.width="50%";
			col1.style.padding="10px";
			col1.appendChild(b);
			col1.appendChild(document.createTextNode(name));
			
			tbody.appendChild(col1);
			
			
			var col2 = document.createElement("dd");
			col2.style.backgroundColor="#333";
			col2.style.color="white";
			col2.style.marginLeft="20%";
			col2.style.width="50%";
			col2.style.padding="10px";
			col2.style.borderBottom="2px solid #23dbdb";
			col2.appendChild(document.createTextNode(txt));
			tbody.appendChild(col2);
		};

</script>



</div>
</div>
 <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->    
  
</body></html>