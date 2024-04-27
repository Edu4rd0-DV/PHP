<?php 

class  oferta(){
  
  public $id;
  
  function get_id(){
  	return $this->id;
  }

  function set_id(){
  	return  $this->id=$id;
  }

  //--------------------------------------------------
   
     public $fk_empresa;
  
  function get_fk_empresa(){
  	return $this->fk_empresa;
  }

  function set_fk_empresa(){
  	return  $this->fk_empresa=$fk_empresa;
  }

 //-----------------------------------------------------------
    public $nombre_oferta;
  
  function get_nombre_oferta(){
  	return $this->nombre_oferta;
  }

  function set_nombre_oferta(){
  	return  $this->nombre_oferta=$nombre_oferta;
  }

   //-----------------------------------------------------------
    public $detalle;
  
  function get_detalle(){
  	return $this->detalle;
  }

  function set_detalle(){
  	return  $this->detalle=$detalle;
  }

   //-----------------------------------------------------------
    public $edad;
  
  function get_edad(){
  	return $this->edad;
  }

  function set_edad(){
  	return  $this->edad=$edad;
  }
   //-----------------------------------------------------------
    public $fk_tipocontrato;
  
  function get_fk_tipocontrato(){
  	return $this->fk_tipocontrato;
  }

  function set_fk_tipocontrato(){
  	return  $this->fk_tipocontrato=$fk_tipocontrato;
  }
   //-----------------------------------------------------------
    public $salario;
  
  function get_salario(){
  	return $this->salario;
  }

  function set_salario(){
  	return  $this->salario=$salario;
  }

  //-----------------------------------------------------------
    public $experiencia_laborar;
  
  function get_experiencia_laborar(){
  	return $this->experiencia_laborar;
  }

  function set_experiencia_laborar(){
  	return  $this->experiencia_laborar=$experiencia_laborar;
  }

   //-----------------------------------------------------------
    public $nombre_oferta;
  
  function get_nombre_oferta(){
  	return $this->nombre_oferta;
  }

  function set_nombre_oferta(){
  	return  $this->nombre_oferta=$nombre_oferta;
  }
   //-----------------------------------------------------------
    public $cantidad;
  
  function get_cantidad(){
  	return $this->cantidad;
  }

  function set_cantidad(){
  	return  $this->cantidad=$cantidad;
  }

  //------------------------------------------------------------------
   //-----------------------------------------------------------
    public $fk_nivelcademico;
  
  function get_fk_nivelacademico(){
  	return $this->fk_nivelcademico;
  }

  function set_fk_nivelacademico(){
  	return  $this->fk_nivelcademico=$fk_nivelcademico;
  }

   //-----------------------------------------------------------
    public $fk_departamento;
  
  function get_fk_departamento(){
  	return $this->fk_departamento;
  }

  function set_fk_departamento(){
  	return  $this->fk_departamento=$fk_departamento;
  }

   //-----------------------------------------------------------
    public $fecha_aplicacion;
  
  function get_fecha_aplicacion(){
  	return $this->fecha_aplicacion;
  }

  function set_fecha_aplicacion(){
  	return  $this->fecha_aplicacion=$fecha_aplicacion;
  }

   //-----------------------------------------------------------
    public $estado;
  
  function get_estado(){
  	return $this->estado;
  }

  function set_estado(){
  	return  $this->estado=$estado;
  }



}


 ?>