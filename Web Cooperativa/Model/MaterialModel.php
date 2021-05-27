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
    function InsertUser($email,$user,$clave_encriptada){
        $sentencia = $this->db->prepare("INSERT INTO usuario(email,user,password) VALUES(?,?,?)");
        $sentencia->execute(array($email,$user,$clave_encriptada));
    }
    function DeleteUser($id_user){
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id=?");
        $sentencia->execute(array($id_user));
    }
    function EditAdmin($user_id,$admin){
        $sentencia = $this->db->prepare("UPDATE usuario SET admin=? WHERE id=?");
        $sentencia->execute(array($admin,$user_id));
    }
}