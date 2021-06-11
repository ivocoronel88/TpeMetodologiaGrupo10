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
    function InsertMaterial($tipo,$entrega){
        $sentencia = $this->db->prepare("INSERT INTO material(tipo,entrega) VALUES(?,?)");
        $sentencia->execute(array($tipo,$entrega));
    }
    function DeleteMaterial($id){
        $sentencia = $this->db->prepare("DELETE FROM material WHERE id=?");
        $sentencia->execute(array($id));
    }
    function EditMaterial($id,$tipo,$entrega){
        $sentencia = $this->db->prepare("UPDATE material SET tipo=?, entrega=? WHERE id=?");
        $sentencia->execute(array($tipo,$entrega,$id));
    }
    
}