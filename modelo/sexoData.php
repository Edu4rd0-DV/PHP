<?php
//modelo empresa
class sexoData{
	//datos de conexion al server
	include "../config/dbconfig.php";
	//entidad de la empresa
	include "../entidades/sexo.php";
	//insert
	function insert($nombre){
		$sexo = new sexo();

		//Data de la empresa
		$sexo->nombre = $nombre;
		

		$sql = $dbConnect->query("
			insert into sexo(nombre)
			values
			('".$sexo->nombre."');
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
	function update($id,$nombre){
		$sexo = new sexo();

		//Data de la empresa
		$sexo->id = $id;
		$sexo->nombre = $nombre;


		$sql = $dbConnect->query("
			update sexo set
			nombre = '".$sexo->nombre."'
			where id = '".$sexo->id."';
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