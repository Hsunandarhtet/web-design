<?php include("menusignin.php"); ?>
<div class="bg">      
<div class="topdiv"></div>
<h2 class="headname">Screenplay - Top100</h2>
  		<div class="grid" id="formargin">
			<a href="../imageframe/screenplalinfosignin.html">
			<figure class="effect-winston">
				<img src="../image/img5.jpg" alt="img30"/>
					<figcaption>
						<h2 id="ht"></h2>
						<h6 id="hg"></h6>
					</figcaption>			
			</figure>
			</a>
			
		</div>
        <script type="text/javascript">
			var title=sessionStorage.getItem("title");
			var genre=sessionStorage.getItem("genre");
			var texta=sessionStorage.getItem("texta");

			(function( ){
				var t = document.getElementById("ht");
					t.appendChild(document.createTextNode(title));
					t.disabled=true;

				var g = document.getElementById("hg");
					g.appendChild(document.createTextNode(genre));
					g.disabled=true;
			})();

		</script>
</div>       
<!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->
  
</body></html>