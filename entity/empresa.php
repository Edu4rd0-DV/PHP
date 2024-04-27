<?php 
class empresa (){
 public $id;
function get_id(){
   return $this->id;
}
function set_id(){
    return $this->id = $id;   
}
//--------
public $nombre;

function get_nombre(){
	return $this->nombre;
}
function set_nombre(){
	return $this->nombre = $nombre;
}
//-------------------------
public $fk_razonsocial;
function get_fk_razonsocial(){
	return $this->fk_razonsocial;
}
function set_fk_razonsocial(){
	return $this->fk_razonsocial = $fk_razonsocial;
}
//-----------------------------
public $telefono ;
function get_telefono(){
	return $this->telefono;
}
function set_telefono(){
	return $this->telefono = $nombre;
}
//-------------------------------

public $correo;
function get_correo(){
	return $this->correo;
}
function set_correo(){
	return $this->correo=$correo;
}
//-----------------------------------
public $direccion;
function get_direccion(){
	return $this->direccion;
}
function set_direccion(){
	return $this->direccion=$direccion;
}
}



 ?>