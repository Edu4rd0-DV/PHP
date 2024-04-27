<?php
//modelo empresa
class usuario{
	//datos de conexion al server
	include "../config/dbconfig.php";
	//entidad de la empresa
	include "../entidades/usuario.php";
	//insert
	function insert($nombre,$apellido,$fecha_nac,$fk_sexo,$dui,$telefono,$fk_nivelacademico,$fk_departamante){
		$usuario = new usuario();

		//Data de la empresa
		$usuario->nombre = $nombre;
		$usuario->apellido = $apellido;
		$usuario->fecha_na = $fecha_nac;
		$usuario->fk_sexo = $fk_sexo;
		$usuario->dui = $dui;
		$usuario->telefono = $telefono;
		$usuario->fkna = $fk_nivelacademico;
		$usuario->fk_dp = $fk_departamante;
		
		
		
		

		$sql = $dbConnect->query("
			insert into usuario(nombre,apellido,fecha_nac,fk_sexo,dui,telefono,fk_nivelacademico,fk_departamante)
			values
			('".$usuario->nombre."'),
			('".$usuario->apellido."'),
			('".$usuario->fecha_na."'),
			('".$usuario->fk_sexo."'),
			('".$usuario->dui."'),
			('".$usuario->telefono."'),
			('".$usuario->fkna."'),
			('".$usuario->fk_dp."');


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
	function update($nombre,$apellido,$fecha_nac,$fk_sexo,$dui,$telefono,$fk_nivelacademico,$fk_departamante){
		$usuario = new usuario();

		//Data de la empresa
		$usuario->nombre = $nombre;
		$usuario->apellido = $apellido;
		$usuario->fecha_na = $fecha_nac;
		$usuario->fk_sexo = $fk_sexo;
		$usuario->dui = $dui;
		$usuario->telefono = $telefono;
		$usuario->fkna = $fk_nivelacademico;
		$usuario->fk_dp = $fk_departamante;
		

		$sql = $dbConnect->query("
			update usuario set
			nombre = '".$usuario->nombre."',
		    apellido = '".$usuario->apellido."',
		    fecha_nac = '".$usuario->fecha_na."',
		    fk_sexo = '".$usuario->fk_sexo."',
		    telefono = '".$usuario->telefono."',
		    fk_nivelacademico = '".$usuario->fkna."',
		    fk_departamante = '".$usuario->fk_dp."'
			where id = '".$usuario->id."';
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