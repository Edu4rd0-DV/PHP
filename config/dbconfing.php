<?php 	
$dbhost = "localhost";
$user= "root";
$password="";
$database = "dbtrabaja";
$dbconnect = new mysqli ($dbhost,$user,$password,$database);

if($dbconnect->connect_error){

	die("No se pudo conectar al servidor: ".$dbConnect->connect_error);
}





 ?>