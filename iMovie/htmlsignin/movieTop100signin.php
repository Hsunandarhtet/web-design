<?php 
include('menusignin.php');
echo "
<div class='bg'>      
<div class='topdiv'></div>
<h2 class='headname'>Movies - Top100</h2>
  		<div class='grid' id='formargin'>";?>
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
$sql="select  * from movies";
$actors=$conn->query($sql);
foreach($actors as $actor){
echo "<a href='movieinfo.php'>
			<figure class='effect-winston'>
				<img src='"?><?php echo $actor['image'];
	echo "'/>
					<figcaption>'
						<h2>";?><?php echo $actor['title']?> <?php echo "</h2>
						
					</figcaption>			
			</figure>
			</a>";?>

<?php } ?>
<?php echo "</div>
	</div>       
	<!-- Back to Top Start -->
    <a href='#' class='scroll-to-top'><i class='fa fa-angle-up'></i></a>
    <!-- Back to Top End -->
  
</body></html>";
?>