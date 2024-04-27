<?php
//modelo empresa
class nivelacasemicoData{
	//datos de conexion al server
	include "../config/dbconfig.php";
	//entidad de la empresa
	include "../entidades/nivelacademico.php";
	//insert
	function insert($nombre,$fecha){
		$nivelacademico = new nivelacademico();

		
		$nivelacademico->nombre = $nombre;
		$nivelacademico->fecha=$fecha;
		

		$sql = $dbConnect->query("
			insert into nivelacademico(nombre,fecha)
			values
			('".$nivelacademico->nombre."'),
			('" $nivelacademico->fecha"')
		");

		if($sql){
			return true;
		}
		else{
			return false;
		}
		mysqli_close($dbConnect);
	}

	//update
	function update($id,$nombre,$fecha){
		$nivelacademico = new nivelacademico();

		//Data de la empresa
		$nivelacademico->id = $id;
		$nivelacademico->nombre = $nombre;
         $nivelacademico->fecha=$fecha;

		$sql = $dbConnect->query("
			update nivelacademico set
			nombre ='".$nivelacademico->nombre."',
			fecha = '"$nivelacademico->fecha"'
			where id = '".$nivelacademico->id."';
		");

		if($sql){
			return true;
		}
		else{
			return false;
		}
		mysqli_close($dbConnect);
	}
}
?>