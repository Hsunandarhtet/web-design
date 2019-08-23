<?php include('menusignin.php' );
echo "
<div class='bg'>
<div class='topdiv'></div>
<h2 class='headname'>Actors</h2>

	<div class='grid' style='margin-left: 10%;'>";?>
<?php 
$dsn='mysql:dbname=ProjectDB';
$username='root';
$password='';
try{
$conn=new PDO($dsn,$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){
	echo "Connection failed".$e->getMessage(); 
}
$sql='select  * from actors';
$actors=$conn->query($sql);
foreach($actors as $actor){
echo "<section class='effect-sadie wow fadeInRight'>
					
	<a href='VinDiesel (2).php'>
	<img src='"?><?php echo $actor['image'];
	echo "'/>
	<figcaption>'
	<h2>";?><?php echo $actor['fName']?> <?php echo "</h2>
 </figcaption>
						
	</a>			
	</section>";?>

<?php } ?>
<?php echo "				
							
				</div>
	</div>       
	<!-- Back to Top Start -->
    <a href='#' class='scroll-to-top'><i class='fa fa-angle-up'></i></a>
    <!-- Back to Top End -->
  
</body></html>";?>