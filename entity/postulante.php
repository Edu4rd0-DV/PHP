<?php 

 class postulante(){

 	public $id;
 	function get_id(){
 		return $this->id;
 	}
 	function set_id(){
 		return $this->id=$id;
 	}
 	//_------------------------
 	public $fk_oferta;

 	function get_fk_oferta(){
 		return $this->fk_oferta;
 	}

 	function set_fk_oferta(){
 		return $this->fk_oferta=$fk_oferta;
 	}
   //_--------------------------
 	public $fk_usuario;

 	function get_fk_usuario(){
 		return $this->fk_usuario;
 	}
    function set_fk_usuario(){
    	return $this->fk_usuario=$fk_usuario;
    }

    //--------------------------
    public $fecha_aplicacion;

    function get_fecha_aplicacion(){
    	return $this->fecha_aplicacion;
    }

    function set_fecha_aplicacion(){
    	return $this->fecha_aplicacion=$fecha_aplicacion;
    }
    //-------------------------------------
    public $competente;
   
    function get_competente(){
    	 return $this->competente;
    }
    function set_competente(){
    	return $this->competente=$competente;
    }  
 
 }


 ?>