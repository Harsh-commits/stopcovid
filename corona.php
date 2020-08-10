<?php 

	$server="sql306.epizy.com";
	$username="epiz_25856443";
	$password="OWxXaWV7ioU" ; 
	$dbname= "epiz_25856443_corona19	" ; 

	$conn = mysql_connect($server , $username , $password , $dbname) ; 

	if ($conn) {
		echo "Successfully Connected";
	}else{
		echo "Not Connected";
	}


 ?>