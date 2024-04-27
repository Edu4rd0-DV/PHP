<?php 
  
  class entrevista(){
  
  public  $id;

  function get_id(){
  	return $this->id;
  }
  function set_id(){
  	return $this->id= $id;
  }
  //---------------------
  public $fk_postulante;
  function get_fk_postulante(){
  	return $this->fk_postulante;
  }
  function set_fk_postulante(){
  	return $this->fk_postulante=$fk_postulante;
  }
//------------------------------
 public $fecha_entrevista;
 function get_fecha_entrevista(){
   return $this->fecha_entrevista;

 }
  function set_fecha_entrevista(){
    return $this->fecha_entrevista = $fecha_entrevista;
  }


  }
  
 ?>