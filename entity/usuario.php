<?php 

 class usuario (){
      
      public $id;

      function get_id(){
      	return $this->id;
      }

      function set_id(){
      	return $this->id=$id;
      }
      //------------------------------
           public $nombre;

      function get_nombre(){
      	return $this->nombre;
      }

      function set_nombre(){
      	return $this->nombre=$nombre;
      }

      //----------------------------------------
           public $apellido;

      function get_apellido(){
      	return $this->apellido;
      }

      function set_apellido(){
      	return $this->apellido=$apellido;
      }

      //-----------------------------------
            public $fecha_na;

      function get_fecha_na(){
      	return $this->fecha_na;
      }

      function set_fecha_na(){
      	return $this->fecha_na=$fecha_na;
      }
      //--------------------------------------------

           public $fk_sexo;

      function get_fk_sexo(){
      	return $this->fk_sexo;
      }

      function set_fk_sexo(){
      	return $this->fk_sexo=$fk_sexo;
      }

      //--------------------------------------------------------
           public $dui;

      function get_dui(){
      	return $this->dui;
      }

      function set_dui(){
      	return $this->dui=$dui;
      }

      //--------------------------------------------------------------
           public $telefono;

      function get_telefono(){
      	return $this->telefono;
      }

      function set_telefono(){
      	return $this->telefono=$telefono;
      }

      //---------------------------------------------------------------
           public $fkna;

      function get_fkna(){
      	return $this->fkna;
      }

      function set_fkna(){
      	return $this->fkna=$fkna;
      }
     
     //----------------------------------------------------------------------
      public $fk_dp;

      function get_fk_dp(){
      	return $this->fk_dp;
      }

      function set_id(){
      	return $this->fk_dp=$fk_dp;
      }


 }







 ?>