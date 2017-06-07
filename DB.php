<?php
	
	
	
$db='shareloc';


$db=new mysqli('localhost','root','',$db) or die("unable to connect");

        

$first=$_POST['name'] or die("va");
	
$lon=$_POST['lon'];
	
$lat=$_POST['lat'];
        
	
$select="INSERT INTO loc(name,lat,lon) VALUES('$first','$lon','$lat')";
	
$db->query($select);
echo "Location Saved!!!";


?>