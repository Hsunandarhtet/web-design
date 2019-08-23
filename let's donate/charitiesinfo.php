<?php 
        require('menu.php');
?>
<style type="text/css">
  td{
        padding: 10px;
      }
</style>
<div class="inner-block">
  <h2>Charity</h2>
  <div class="row" style="position: relative;width: 100%;">

    <div class="col-md-3" style="border-radius: 10px;margin-top: 5% ">
      <img src="images/donateimg.jpg" height="200" width="200"/>
    </div>

    <div class="col-md-9 d-inline bg-success" style="border-radius: 10px;padding: 5% 8%">
    <table style="width: 100%;">
        <tr>
        <td>
        <p style="padding: 2% 0%;"><spam style="color:#FC8213">Name :</spam></td>
        <td>  Charity Oriented Myanmar</p></td>
        </tr>
        <tr>
        <td>
        <p style="padding: 2% 0%;"><spam style="color:#FC8213">Description :</spam></td>
        <td> (1)Education support program for informal education to orphans and needy children at basic education level.
        (2)Relief and rehabilitation for diasater and victims program.
        (3)Women and Children protection program.</p></td>
        </tr>
        <tr>
        <td>
        <p style="padding: 2% 0%"><spam style="color:#FC8213">Facebook Page :</spam>
        </p></td>
        <td><a href="http://www.facebook.com/charityorientedmyanmar">http://www.facebook.com/charityorientedmyanmar/</a></spam></td>
        </tr>
        <tr>
        <td>
        <p style="padding: 2% 0%""><spam style="color:#FC8213">Phone Number :</spam></td>
        <td>01-573704, 09-43029212, 09-73202462</p></td>
        </tr>
        <tr>
        <td>
        <p style="padding: 2% 0%"><spam style="color:#FC8213">Address :</spam></td>
        <td>No. 40, Aung Myay Yadanar Street,Thu Mingalar Residence,Thin Gan Gyun</p></td>
        </tr>
        </table>
        <div id="map"></div>
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
</div> 

