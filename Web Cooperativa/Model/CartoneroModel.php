<?php
class CartoneroModel{

    private $db;

    function __construct(){
       $this->db = new PDO('mysql:host=localhost;'.'dbname=db_cooperativa;charset=utf8', 'root', '');
    }
    function GetCartoneros(){
        $sentencia = $this->db->prepare("SELECT * FROM cartonero");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetCartonero($cartonero_id){
       $sentencia = $this->db->prepare("SELECT * FROM cartonero WHERE id=? ");
       $sentencia->execute([$cartonero_id]);
       return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    function GetCartoneroDni($cartonero_dni){
        $sentencia = $this->db->prepare("SELECT * FROM cartonero WHERE dni=? ");
        $sentencia->execute([$cartonero_dni]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
     }
    function InsertPesoVidrio($peso,$cartonero_dni){
        $sentencia = $this->db->prepare("UPDATE cartonero SET peso_vidrio=? WHERE dni=? ");
        $sentencia->execute(array($peso,$cartonero_dni));
    }
    function InsertPesoAluminio($peso,$cartonero_dni){
        $sentencia = $this->db->prepare("UPDATE cartonero SET peso_aluminio=? WHERE dni=? ");
        $sentencia->execute(array($peso,$cartonero_dni));
    }
    function InsertPesoPlastico($peso,$cartonero_dni){
        $sentencia = $this->db->prepare("UPDATE cartonero SET peso_plastico=? WHERE dni=? ");
        $sentencia->execute(array($peso,$cartonero_dni));
    }
    function InsertPesoPapel($peso,$cartonero_dni){
        $sentencia = $this->db->prepare("UPDATE cartonero SET peso_papel=? WHERE dni=? ");
        $sentencia->execute(array($peso,$cartonero_dni));
    }

    function InsertCartonero($nombre,$dni,$direccion,$vehiculo){
        $sentencia = $this->db->prepare("INSERT INTO cartonero(nombre,dni,direccion,vehiculo) VALUES(?,?,?,?)");
        $sentencia->execute(array($nombre,$dni,$direccion,$vehiculo));
    }
    function DeleteCartonero($id){
        $sentencia = $this->db->prepare("DELETE FROM cartonero WHERE id=?");
        $sentencia->execute(array($id));
    }
    
    function EditarCartonero($id,$nombre,$dni,$direccion,$vehiculo){
        $sentencia = $this->db->prepare("UPDATE  cartonero SET nombre=?, dni=?,direccion=?,vehiculo=? WHERE id=?");
        $sentencia->execute(array($nombre,$dni,$direccion,$vehiculo,$id));
    }
}