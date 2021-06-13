<?php
class MaterialModel{

    private $db;

    function __construct(){
       $this->db = new PDO('mysql:host=localhost;'.'dbname=db_cooperativa;charset=utf8', 'root', '');
    }
    function GetMateriales(){
        $sentencia = $this->db->prepare("SELECT * FROM material");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function GetMaterial($material_id){
        $sentencia = $this->db->prepare("SELECT * FROM material WHERE id=?");
        $sentencia->execute(array($material_id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    
    function InsertMaterial($tipo,$entrega,$imagen){
        $sentencia = $this->db->prepare("INSERT INTO material(tipo,entrega,imagen) VALUES(?,?,?)");
        $sentencia->execute(array($tipo,$entrega,$imagen));
    }
    function DeleteMaterial($id){
        $sentencia = $this->db->prepare("DELETE FROM material WHERE id=?");
        $sentencia->execute(array($id));
    }
    function EditMaterial($tipo,$entrega,$imagen,$id){
        $sentencia = $this->db->prepare("UPDATE material SET tipo=?, entrega=?, imagen=? WHERE id=?");
        $sentencia->execute(array($tipo,$entrega,$imagen,$id));
    }
    
}