<?php
class SolicitudModel{

    private $db;

    function __construct(){
       $this->db = new PDO('mysql:host=localhost;'.'dbname=db_cooperativa;charset=utf8', 'root', '');
    }
   
    function InsertSolicitud($nombre,$apellido,$direccion,$telefono,$franja){
        $sentencia = $this->db->prepare("INSERT INTO solicitud(nombre,apellido,direccion,telefono,franja) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($nombre,$apellido,$direccion,$telefono,$franja));
    }
    
}