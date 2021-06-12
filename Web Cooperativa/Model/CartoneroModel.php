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

    function GetCartonero($cartonero_dni){
       $sentencia = $this->db->prepare("SELECT * FROM cartonero WHERE dni=? ");
       $sentencia->execute([$cartonero_dni]);
       return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    function InsertPeso($peso,$cartonero_dni){
        $sentencia = $this->db->prepare("UPDATE cartonero SET peso_materiales=? WHERE dni=? ");
        $sentencia->execute(array($peso,$cartonero_dni));
    }

    function InsertMateriales($email,$user,$clave_encriptada){
        $sentencia = $this->db->prepare("INSERT INTO usuario(email,user,password) VALUES(?,?,?)");
        $sentencia->execute(array($email,$user,$clave_encriptada));
    }
    function DeleteMateriales($id_user){
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id=?");
        $sentencia->execute(array($id_user));
    }
    function EditMateriales($user_id,$admin){
        $sentencia = $this->db->prepare("UPDATE usuario SET admin=? WHERE id=?");
        $sentencia->execute(array($admin,$user_id));
    }
}