<?php 	
//Datos de conexión al server
$dbHost ="localhost";
$user ="root";
$password="";//Solo si tiene configurada una.

//Conectar al server
$dbconnect = new mysqli($dbHost,$user,$password);

//Mostrar mensaje en caso de error
if($dbconnect->connect_error){

	die("No se pudo conectar al servidor: ".$dbConnect->connect_error);
}


 ?>