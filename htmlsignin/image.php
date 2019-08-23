<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
include('dblink.php');
$res=mysql_query("select * from Actors");
echo "<table>";
while ($row=mysql_fetch_array($res)) {
	echo "<tr>";
	echo "<td>";?><img src="<?php echo $row['image']?>" height="100" width="100">
<?php
	echo "</td>";
	echo "<td>";
	echo $row['info'];
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>