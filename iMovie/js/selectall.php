<?php 
include('dblink.php');
$qurey="SELECT * from Users";
$ret=mysql_query($qurey,$con);
echo "<table border='1' width='50%' cellpadding='0' align='center'>
<tr align='center' bgcolor='lightblue'>
<td width='25%'>User Name</td>
<td width='25%'>Email</td>
</tr>
";
$noRows=mysql_num_rows($ret);
for ($i=0; $i < $noRows; $i++) { 
	$row=mysql_fetch_array($ret);
	echo "<tr>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>