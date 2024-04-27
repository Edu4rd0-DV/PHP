<?php
//modelo empresa
class ofertaData{
	//datos de conexion al server
	include "../config/dbconfig.php";
	//entidad de la empresa
	include "../entidades/oferta.php";
	//insert
	function insert($fk_empresa,$nombre,$detalle,$edad,$fk_tipocontrato,$salario,$experiencia_laboral,$fk_nivelacademico,$fk_departamento,$fecha_aplicacion,$cantidad,$estado){
		$oferta= new oferta();

		//Data de la empresa

		$oferta->fk_empresa = $fk_empresa;
		$oferta->nombre_oferta=$nombre;
		$oferta->detalle =$detalle;
		$oferta->edad = $edad;
		$oferta->fk_tipocontrato=$fk_tipocontrato;
		$oferta->salario=$salario;
		$oferta->experiencia_laboral=$experiencia_laboral;
		$oferta->fk_nivelacademico=$fk_nivelacademico;
		$oferta->fk_departamento=$fk_departamento;
		$oferta->fecha_aplicacion=$fecha_aplicacion;
		$oferta->estado=$estado;
		$oferta->cantidad=$cantidad;

		$sql = $dbConnect->query("
			insert into oferta(fk_empresa,nombre_empresa,detalle,edad,fk_tipocontrato,salario,experiencia_laboral,fk_nivelacademico,fk_departamento,fecha_aplicacion,cantidad,estado)
			values
			('".$oferta->fk_empresa."')
			('".$oferta->nombre_oferta."'),
			('".$oferta->detalle."'),
		    ('".$oferta->edad."'),
		    ('".$oferta->fk_tipocontrato."'),
		    ('".$oferta->salario."'),
		    ('".$oferta->experiencia_laboral."'),
		    ('".$oferta->fk_nivelacademico."'),
		    ('".$oferta->fk_departamento."'),
		    ('".$oferta->fecha_aplicacion."'),
		    ('".$oferta->cantidad."'),
		    ('".$oferta->estado."')


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

	//update
	function update ($fk_empresa,$nombre,$detalle,$edad,$fk_tipocontrato,$salario,$experiencia_laboral,$fk_nivelacademico,$fk_departamento,$fecha_aplicacion,$cantidad,$estado){
		
        $oferta= new oferta();

		//Data de la empresa

		$oferta->fk_empresa = $fk_empresa;
		$oferta->nombre_oferta=$nombre;
		$oferta->detalle =$detalle;
		$oferta->edad = $edad;
		$oferta->fk_tipocontrato=$fk_tipocontrato;
		$oferta->salario=$salario;
		$oferta->experiencia_laboral=$experiencia_laboral;
		$oferta->fk_nivelacademico=$fk_nivelacademico;
		$oferta->fk_departamento=$fk_departamento;
		$oferta->fecha_aplicacion=$fecha_aplicacion;
	    $oferta->cantidad=$cantidad;
		$oferta->estado=$estado;



		$sql = $dbConnect->query("
			update oferta set
			fk_empresa = '".$oferta->fk_departamento."',
			nombre_empresa = '".$oferta->nombre_oferta."',
			detalle = '".$oferta->detalle."',
			edad = '".$oferta->edad."',
             fk_tipocontrato = '".$oferta->fk_tipocontrato."',
             salario = '".$oferta->salario."',
             experiencia_laboral = '".$oferta->experiencia_laboral."',
            fk_nivelacademico = '".$oferta->fk_nivelacademico."',
            fk_departamento = '".$oferta->fk_departamento."',
            fecha_aplicacion = '".$oferta->fk_nivelacademico."',
            cantidad = '".$oferta->cantidad."',
            estado = '".$oferta->estado."'
            where id = '".$oferta->id."';
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