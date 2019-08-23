<?php include('menu.php');?>
<div class="bg">
<div style="margin:20px;">
<form method="post"
action="javascript:alert(&quot;Thank
You:):)&quot;)">
<p align="center" style="font-family:Monotype
Corsiva, Times, Serif;text-shadow:3px 3px
5px #ffffff;">;<font size="16">PUZZLE&nbsp;
&nbsp;MOVIES </font></p>
<p align="center" style="fontfamily:
Monotype Corsiva, Times, Serif">
<font size="6" color="pink"> .........The best
place to find the best movies..........</font></
p>
<table align="right">
<table align="right">
<tr>
<td>
<h1 style="color:#fff;" class="wow bounceInLeft">ABOUT US</h1>
<p style="font-size:20;font-style:Serif;color:#fff;" class="wow bounceInLeft">
PuzzleMovie is a free portal about movies.
This online resource is designed to provide
the
internet users with all necessary information
concerning
movies and TV series.It also support users
with streaming links.
All the details concerning the movies will be
obtained from open
movie database.The information will be
received through free API
gates.Our resource includes over 100
different external streaming services.
Our system obtains all those links from the
commiting sections,where
users from all over the globe download
users from all over the globe download
different videos.Our system examines those
links and
publishes them on our online resource with
the streaming links.</p>
<p style="font-size:20;font-style:Serif;color:#fff;" class="wow bounceInLeft">
Our service does not publish information
manually,because it is completely
automatic.It seeks for new links in the
commeting sections and afterward,our
system checks the hoster and adds it to our
file storage.Due to this factor,
we do not guarantee that all link work
properly.Probably,some videos are of low
quality
or do not contain the correct movie that is
mentioned in the link.</p>
</p></td>
<td >
<td >
<table align="center" cellspacing="5">
<tr class='wow bounceInRight'>
<td><img src="slide1.jpg" height="200"
width="250"></td>
<td><img src="slide2.jpg" height="200"
width="250"></td>
<td><img src="slide3.jpg" height="200"
width="250"></td>
</tr>
<tr class='wow bounceInRight'>
<td><img src="slide4.png" height="200"
width="250"></td>
<td><img src="slide5.png" height="200"
width="250"></td>
<td><img src="slide6.png" height="200"
width="250"></td>
</tr>
<tr class='wow bounceInRight'>
<td><img src="slide7.png" height="200"
width="250"></td>
<td><img src="slide8.png" height="200"
width="250"></td>
<td><img src="slide9.jpg" height="200"
width="250"></td>
</tr>
</table>
</td>
</tr>
</table>
<div>
<td width="600">
<h1 style="color:#fff;"  class="wow bounceInDown">Our Group Members are:::</h1>
<h2 style="color:#fff;">Leader=>></h2><p style="font size:
16;color:#fff;"> Mg NyanThar Myint</p>
<h2 style="color:#fff;"> Members=>></h2> <p style="font size:
16;color:#fff;">&nbsp; &nbsp; Mg Tala Htaw<br>&nbsp;
&nbsp;
Ma Aye Myat Linn<br>&nbsp; &nbsp;
Ma Hnin Thiri Lwin<br>&nbsp; &nbsp;
Ma Su Nandar Htet<br>&nbsp; &nbsp;
Ma Theint Thiri Aung<br>&nbsp; &nbsp;</
p><br><br>
</div>
<div>
<h1 style="color:#fff;" class="wow bounceInDown">***Contact Us***</h1>
<h2 style="color:#fff;">Your Info</h2>
<form name="htmlform" method="post"
action="html_form_send.php">
<div>
<label for="email" style="color:#fff;">Email Address *</label>
<input type="text" name="email"
maxlength="80" size="30"
style="color:white;border:3px solid black;color:#fff;width:400px;";>
<br><br>
</div>
<div>
<label for="telephone" style="color:#fff;">Telephone
Number*</label>
<input type="text" name="telephone"
maxlength="30" size="30"
style="color:white;border:3px solid black;width:400px;";>
</div>
<br>
<br>
<br>
<div>
<div id="showAll" >
<h3 style="color:#fff;">Leave a Comment</h3>
<dl id="tbody">
<dt><b style="color:#fff;">Hello</b><br></dt>
<dd width="80%" style="color:#fff;">Leave a comment below
if you want to!!</dd>
</dl>
</div>
<div>
<input type="text" id="myText" size="55" style="width:300px;"
placeholder="*Enter your name here*"
required>
</div>
</div>
<br>
<div>
<textarea id = "myTextArea" cols="75"
rows="5" style="color:black"
placeholder="*Enter your comment here*"
required>
</textarea>
</div>
<input type="submit" id="myBtn"
value="Submit" style="color:black;border:3px
solid black;";>
<input type="reset" value="Cancel"
style="color:black;border:3px solid black;width:300px;";>
<dl id="tbody" >
<dt ></dt>
<dd><br/></dd>
</dl>
</div>
<script type = "text/javascript">
var div =
document.getElementById("myDiv");
var btn =
document.getElementById("myBtn");
var tbody =
document.getElementById("tbody");
var b = document.createElement("b");
btn.onclick = function(){
var textn =
document.getElementById("myText");
var textarea =
var textarea =
document.getElementById("myTextArea");
var name = textn.value;
var txt = textarea.value;
var col1 = document.createElement("dt");
col1.style.backgroundColor="#333";
col1.style.color="white";
col1.style.marginLeft="20%";
col1.style.width="50%";
col1.style.padding="10px";
col1.appendChild(b);
col1.appendChild(document.createTextNode(
name));
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
<script src="../css/WOW-master/dist/wow.js"></script>
    <script>
    new WOW().init();
  </script>    
</div>
	<!-- Back to Top Start -->
    <a href='#' class='scroll-to-top'><i class='fa fa-angle-up'></i></a>
    <!-- Back to Top End -->
    </body>
    </html>