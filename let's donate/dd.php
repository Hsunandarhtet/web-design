<?Php
@$cat_id=$_GET['cat_id'];
//$cat_id=2;
/// Preventing injection attack //// 
if(!is_numeric($cat_id)){
echo "Data Error";
exit;
 }
/// end of checking injection attack ////
require "connect.php";

$sql="select subcategory,subcat_id from location_subcategory where cat_id='$cat_id'";
$result = mysqli_query($connect, $sql);
$row=mysqli_fetch_all($result,MYSQLI_ASSOC);

$main = array('data'=>$row);
echo json_encode($main);
?>