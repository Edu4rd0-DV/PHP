<?php
//modelo empresa
class razonsocialData{
	//datos de conexion al server
	include "../config/dbconfig.php";
	//entidad de la empresa
	include "../entidades/razonsocialEN.php";
	//insert
	function insert($nombre){
		$razonsocial = new razonsocial();

		//Data de la empresa
		$razonsocial->nombre = $nombre;
	

		$sql = $dbConnect->query("
			insert into razonsocial(nombre)
			values
			('".$razonsocial->nombre."'
			

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
		$razonsocial = new razonsocial();

		//Data de la empresa
		$razonsocial->id = $id;


		$sql = $dbConnect->query("
			update razonsocial set
			nombre = '".$razonsocial->nombre."'
			where id = '".$razonsocial->id."';
			;

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