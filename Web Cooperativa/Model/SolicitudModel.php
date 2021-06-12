<?php
class SolicitudModel{

    private $db;

    function __construct(){
       $this->db = new PDO('mysql:host=localhost;'.'dbname=db_cooperativa;charset=utf8', 'root', '');
    }
    function GetSolicitudes(){
        $sentencia = $this->db->prepare("SELECT * FROM solicitud");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function InsertSolicitud($nombre,$apellido,$direccion,$telefono,$franja){
        $sentencia = $this->db->prepare("INSERT INTO solicitud(nombre,apellido,direccion,telefono,franja) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($nombre,$apellido,$direccion,$telefono,$franja));
    }
    
}