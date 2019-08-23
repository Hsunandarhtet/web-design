
<?php
mysql_connect("localhost", "root", "") or
die("Error connecting to database:
".mysql_error());
/*
localhost - it's location of the mysql
server, usually localhost
root - your username
third is your password
if connection fails it will stop loading the
page and display an error
*/
mysql_select_db("projectdb") or
die(mysql_error());
/* tutorial_search is the name of database
we've created */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD
XHTML 1.0 Transitional//EN" "http://
www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html>
<head>
<title>Search results</title>
<meta http-equiv="Content-Type"
content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"
href="style.css"/>
</head>

<body>
<?php
include('menu.php');
$catgo=$_GET['category'];
$query = $_GET['query'];
$min_length = 3;
if(strlen($query) >= $min_length){{
  
  if ($catgo=="Movies") {
        $query = htmlspecialchars($query);
        $query =mysql_real_escape_string($query);

        $raw_results = mysql_query("SELECT * FROM Movies
                                    WHERE (`mName` LIKE '%".$query."%') OR (`title` LIKE '%".$query."%')") or
                       die(mysql_error());
        if(mysql_num_rows($raw_results) > 0){
         while ($results=mysql_fetch_array($raw_results)){
                  echo "<p><h3 style='margin-left:10%;margin-top:20%;font_face:corbel;color:white;font-size:15px;' class='wow bounceInLeft'>".$results['mName']."</h3>".$results['title'].$results['plot'];
                 }
           }
  else{
         echo "<h3 style='margin-left:10%;margin-top:20%;font_face:corbel;color:red;font-size:30px;' class='wow bounceInLeft'>No results</p>";
         }
     }
     
  
  
  elseif ($catgo=="Actors") {
        $query = htmlspecialchars($query);
        $query =mysql_real_escape_string($query);

        $raw_results = mysql_query("SELECT * FROM Actors
                                    WHERE (`fName` LIKE '%".$query."%')") or
                       die(mysql_error());
        if(mysql_num_rows($raw_results) > 0){
         while ($results=mysql_fetch_array($raw_results)){
                  echo "<div style='width:60%;margin-left:10%;margin-top:20%;font_face:corbel;color:#fff;font-size:15px;'
                         class='wow bounceInLeft'><h3>".$results['fName']."</h3>".$results['dateOfBirth'].$results['info'].
                        "<br><img src='". $results['image']."'>"."</div>";
                 }
           }
  else{
         echo "<h3 style='margin-left:10%;margin-top:20%;font_face:corbel;color:red;font-size:30px;' class='wow bounceInLeft'>No results</p>";
         }
     }
     
    elseif ($catgo=="Actress"){
            $query = htmlspecialchars($query);
            $query =mysql_real_escape_string($query);

            $raw_results = mysql_query("SELECT * FROM Actress
                                        WHERE (`fName` LIKE '%".$query."%')") or
                           die(mysql_error());
            if(mysql_num_rows($raw_results) > 0){
              while ($results=mysql_fetch_array($raw_results)){
                        echo "<div style='width:60%;margin-left:10%;margin-top:20%;font_face:corbel;color:#fff;font-size:15px;'
                         class='wow bounceInLeft'><h3>".$results['fName']."</h3>".$results['dateOfBirth'].$results['info'].
                        "<br><img src='". $results['image']."'>"."</div>";
              }
                     
               }
    else{
         echo "<h3 style='margin-left:10%;margin-top:20%;font_face:corbel;color:red;font-size:30px;' class='wow bounceInLeft'>No results</p>";
         }
           }
           
      elseif ($catgo=="Directors"){
              $query = htmlspecialchars($query);
              $query =mysql_real_escape_string($query);

              $raw_results = mysql_query("SELECT * FROM Directors
                                          WHERE (`fName` LIKE '%".$query."%')") or
                             die(mysql_error());
                if(mysql_num_rows($raw_results) > 0){
                 while ($results=mysql_fetch_array($raw_results)){
                         echo "<div style='width:60%;margin-left:10%;margin-top:20%;font_face:corbel;color:#fff;font-size:15px;'
                         class='wow bounceInLeft'><h3>".$results['fName']."</h3>".$results['dateOfBirth'].$results['info'].
                        "<br><img src='". $results['image']."'>"."</div>";
                         }
                      }
      else{
         echo "<h3 style='margin-left:10%;margin-top:20%;font_face:corbel;color:red;font-size:30px;' class='wow bounceInLeft'>No results</p>";
         }
               }  

               elseif ($catgo=="Producers") {
        $query = htmlspecialchars($query);
        $query =mysql_real_escape_string($query);

        $raw_results = mysql_query("SELECT * FROM Producers
                                    WHERE (`fName` LIKE '%".$query."%')") or
                       die(mysql_error());
        if(mysql_num_rows($raw_results) > 0){
         while ($results=mysql_fetch_array($raw_results)){
                  echo "<div style='width:60%;margin-left:10%;margin-top:20%;font_face:corbel;color:#fff;font-size:15px;'
                         class='wow bounceInLeft'><h3>".$results['fName']."</h3>".$results['dateOfBirth'].$results['info'].
                        "<br><img src='". $results['image']."'>"."</div>";
                 }
           }
  else{
         echo "<h3 style='margin-left:10%;margin-top:20%;font_face:corbel;color:red;font-size:30px;' class='wow bounceInLeft'>No results</p>";
         }
     }
     
               
    
}}
else{ 
  echo "<h3 style='margin-left:10%;margin-top:20%;font_face:corbel;color:red;font-size:30px;' class='wow bounceInLeft'>Minimum length is ".$min_length;
}

?>
</body>
</html>