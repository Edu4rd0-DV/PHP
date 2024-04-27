<?php
//modelo empresa
class empresaData{
	//datos de conexion al server
	include "../config/dbconfig.php";
	//entidad de la empresa
	include "../entidades/empresa.php";
	//insert
	function insert($nombre,$fkRazonSocial,$telefono,$correo,$direccion){
		$empresa = new empresa();

		//Data de la empresa
		$empresa->nombre = $nombre;
		$empresa->fk_razonSocial = $fk_razonSocial;
		$empresa->telefono = $telefono;
		$empresa->correo = $correo;
		$empresa->direccion = $direccion;

		$sql = $dbConnect->query("
			insert into empresa(nombre,fk_razonSocial,telefono,correo,direccion)
			values
			('".$empresa->nombre."',
			 '".$empresa->fk_razonSocial."',
			 '".$empresa->telefono."',
			 '".$empresa->correo."',
			 '".$empresa->direccion."');
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
	function update($id,$nombre,$fk_razonSocial,$telefono,$correo,$direccion){
		$empresa = new empresa();

		//Data de la empresa
		$empresa->id = $id;
		$empresa->nombre = $nombre;
		$empresa->fk_razonSocial = $fk_razonSocial;
		$empresa->telefono = $telefono;
		$empresa->correo = $correo;
		$empresa->direccion = $direccion;

		$sql = $dbConnect->query("
			update empresa set
			nombre = '".$empresa->nombre."',
			fkRazonSocial = '".$empresa->fk_razonSocial."',
			telefono = '".$empresa->telefono."',
			correo = '".$empresa->correo."',
			direccion = '".$empresa->direccion."'
			where id = '".$empresa->id."';
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