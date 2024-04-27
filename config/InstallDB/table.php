<?php 
function tablesDB(){
   include "..\dbconfing.php";

   $tbrazonsocial = $dbconnect->query("
    create table razonsocial(
    id int not null auto_increment,
    nombre varchar(80) not null, 
    primary key(id)
)");


   $tbempresa = $dbconnect->query("
    create table empresa (
    id bigint not null auto_increment,
    nombre varchar(80) not null,
    fk_razonsocial int  not null,
    telefono nvarchar(20) not null ,
    correo nvarchar(50)not null,
    dirrecion nvarchar(150)not null,
    foreign key (fk_razonsocial) references razonsocial(id),
    primary key (id)
    )

   	");
   $tbtipocontrato = $dbconnect->query("
    create table tipocontrato (
     id bigint not null  auto_increment,
     nombre varchar(80) not null,
     primary key(id)

    )
");

   $tbdepartamento = $dbconnect->query("
     create table departamento (
     id bigint not null auto_increment ,
     nombre nvarchar(50)not null,
     primary key(id)
     )
    ");

   $tbnivelacademico = $dbconnect->query("
      create table nivel_academico(
      id bigint not null auto_increment,
      nombre nvarchar(50) not null,
      fecha date not null,
      primary key(id)

      )
   	");
   $tboferta = $dbconnect->query("
     create table oferta(
     id  bigint not null auto_increment,
     fk_empresa bigint not null,
     nombre_oferta nvarchar(80)not null, 
     detalle nvarchar(100)not null,
     edad nvarchar(50) not null, 
     fk_tipocontrato bigint not null,
     salario decimal(9.2) not null,
     experiencia_laboral nvarchar(100) not null,
     fk_nivelacademico bigint not null,
     fk_departamento bigint not null, 
     fecha_aplicacion date not null,
     cantidad_plazas bigint not null,
     estado int not null ,
     primary key (id),
     foreign key(fk_empresa) references empresa(id),
     foreign key(fk_tipocontrato) references tipocontrato(id),
     foreign key (fk_nivelacademico) references nivel_academico(id),
     foreign key(fk_departamento) references departamento(id))
	");

   $tbsexo = $dbconnect->query("
       create table  sexo (
       id int not null auto_increment,
       nombre varchar(50) not null,
       primary key (id)
       )


   	");
   $tbusuario = $dbconnect->query("
     create table usuario (
     id bigint not null auto_increment,
     nombre varchar(80) not null,
     apellido varchar(80) not null,
     fecha_nac date not null,
     fk_sexo int not null ,
     dui nvarchar(15)not null,
     telefono nvarchar(50) not null,
     fk_nivelacademico bigint not null,
     fk_departamento bigint not null,
     primary key(id),
     foreign key(fk_sexo)references sexo (id),
     foreign key(fk_nivelacademico) references nivel_academico(id),
     foreign key(fk_departamento) references departamento(id)
     )
   	");


   $tbpostulante = $dbconnect->query("
     create table postulante(
     id  bigint  not null auto_increment,
     fk_oferta bigint not null ,
     fk_usuario bigint not  null,
     fecha_aplicacion date not null,
     competente  nvarchar(80) not null,
     primary key(id),
     foreign key (fk_oferta)references oferta(id),
     foreign key(fk_usuario)references usuario(id)
     )
   	");

   $tbentrevista = $dbconnect->query("
    create table entrevista(
     id  bigint not null  auto_increment,
     fk_postulante bigint not null,
     fecha_entrevista date not null,
     hora_entrevista time not null,
     primary key (id),
     foreign  key (fk_postulante) references postulante (id)
    )

   	");


   if ($tbrazonsocial && 
       $tbempresa &&
       $tbtipocontrato &&
       $tbdepartamento &&
       $tbnivelacademico &&
        $tboferta &&
        $tbsexo &&
        $tbusuario&&
        $tbpostulante &&
        $tbentrevista 
    ) {
   	     echo"<script>alert('se crearon las tables ')
          window.localtion='../../index.php';
         </script>";
   }else{
        echo"<script>alert('no se crearon las tables ')</script>";
   }




}

 tablesDB();




 ?>