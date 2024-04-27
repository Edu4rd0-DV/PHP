<?php
//modelo empresa
class departamentoData{
	//datos de conexion al server
	include "../config/dbconfig.php";
	//entidad de la empresa
	include "../entidades/departamento.php";
	//insert
	function insert($nombre){
		$departamento = new departamento();

		//Data de la empresa
		$tipocontrato->nombre = $nombre;
		

		$sql = $dbConnect->query("
			insert into departamento(nombre)
			values
			('".$departamento->nombre."');
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
		$departamento = new departamento();

		//Data de la empresa
		$departamento->id = $id;
		$departamento->nombre = $nombre;


		$sql = $dbConnect->query("
			update departamento set
			nombre = '".$departamento->nombre."'
			where id = '".$departamento->id."';
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