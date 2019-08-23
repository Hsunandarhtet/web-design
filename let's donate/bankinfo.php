<?php session_start();
if(isset($_SESSION['email'])){
    require('menusignin.php');
    }
    else{
        require('menu.php');
        }?>
         <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
      td{
        padding: 10px;
      }
    </style>

<div class="inner-block">

 
 
 <div class="row" style="position: relative;max-width: 100%;width: 100%;">
 <div class="col-md-3" style="border-radius: 10px;margin-top: 5% ">
 <img src="images\bps.jpg" height="200" width="200"/>
</div>
 <div class="col-md-9 d-inline bg-success" style="border-radius: 10px;padding: 5% 7%">
        <table style="width: 100%;">
        <tr>
        <td>
   			<p><spam style="color:#FC8213">Name:</spam></p>
        </td>
        <td> biuhij oijoijoojiohijoijijoij jioijoibiuh</td>
        </tr>
        <tr>
        <td>
   			<p><spam style="color:#FC8213">Description:<br></spam></p>
        </td>
        <td> biuhi joijoijooji ohijoijijoijjio ijoibiuhijoijoijo oji ohijoijijoi jjioij oibiuhij oijo ijoojiohijoij ijoijjioijoibiuhijo ijoijooj </td>
        </tr>
        <tr>
        <td>
   			<p><spam style="color:#FC8213">Facebook Page:</spam></p></td>
        <td><a href="#">biuhij oijoijoojiohijoijij oijjioijoibiuhijoijoijoojiohijoijij oijjioijoi</a></td></tr>
        <tr>
        <td>
   			<p><spam style="color:#FC8213">Ph No.:</spam></p></td>
        <td>0915452515</td>
        </tr>
        <tr>
        <td>
   			<p><spam style="color:#FC8213">Address:</spam></p></td>
        <td>biuh ijoijoijoojiohijoijijoijjioijoibiuhijoijoijoojiohijoijijoijjioijoib iuhijoijoijooj iohijoijijoijjio ijoibiuhijo</td></tr>
        <tr>
        <td>
        <p><spam style="color:#FC8213">Requirements for donation:</spam></p></td>
        <td>biuh ijoijoijoojiohijoijijoijjioijoibiuhijoijoijoojiohijoijijoijjioijoib iuhijoijoijooj iohijoijijoijjio ijoibiuhij</td></tr>
        </table>
        <!--The div element for the map -->
    <div id="map" style="padding: 20px;"></div>
    <script>
var mapCanvas = document.getElementById("map");
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
}
var map = new google.maps.Map(mapCanvas, mapOptions);
</script>
   	 </div>
     </div>
   </div>

<div class="copyrights">
   <h4>Made with <i class="fa fa-fw fa-heart"></i>, <i class="fa fa-fw fa-coffee"></i> & 
<i class="fa fa-fw fa-laptop"></i>.</a></h4>
    
</div> 


