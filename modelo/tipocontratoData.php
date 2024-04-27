<?php
//modelo empresa
class tipocontratoData{
	//datos de conexion al server
	include "../config/dbconfig.php";
	//entidad de la empresa
	include "../entidades/tipocontrato.php";
	//insert
	function insert($nombre){
		$tipocontrato = new tipocontrato();

		//Data de la empresa
		$tipocontrato->nombre = $nombre;
		

		$sql = $dbConnect->query("
			insert into tipocontrato(nombre)
			values
			('".$tipocontrato->nombre."');
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
		$tipocontrato = new tipocontrato();

		//Data de la empresa
		$tipocontrato->id = $id;
		$tipocontrato->nombre = $nombre;


		$sql = $dbConnect->query("
			update tipocontrato set
			nombre = '".$tipocontrato->nombre."'
			where id = '".$tipocontrato->id."';
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