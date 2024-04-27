<?php 
  
  function createDB(){

    include "datalog.php";
  
    $sql = $dbconnect->query("create database dbtrabaja");

    if ($sql) {
    	
    	echo"<script>
    	alert('se creo la base de datos') 
    	window.location = 'table.php'
    	</script>";

    }else{

        echo"<script>alert('no se creo la base de datos') </script>";
    }

    mysqli_close($dbconnect);

  }


   createDB();





 ?>