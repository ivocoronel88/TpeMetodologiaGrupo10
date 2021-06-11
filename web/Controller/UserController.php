<?php

require_once "./View/UserView.php";
require_once "./Model/UserModel.php";
require_once "./helpers/auth.helper.php";


class UserController{

    private $view;
    private $model;
    private $authHelper;


    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();
    }

    function Login(){
        $this->view->ShowLogin();
    }
    function Registracion(){
        $this->view->ShowRegistracion();
       
    }
    function RegistracionUser(){
        $email = $_POST["input_email"];
        $user = $_POST["input_user"];
        $pass = $_POST["input_password"];
        if(!empty($email)&&!empty($user)&&!empty($pass)){
            $usuarioFromDB = $this->model->GetUser($email);
            if(!$usuarioFromDB) {
                $clave_encriptada = password_hash ($pass , PASSWORD_DEFAULT );
                $this->model->InsertUser($email,$user,$clave_encriptada);
                $this->authHelper->login($this->model->GetUser($email));
                header("Location: ".BASE_URL."Comunidad"); 
            }
            else{
                $this->view->ShowRegistracion("Usted ya esta registrado");
            }
        }
        else{
            $this->view->ShowRegistracion("Uno de los campos esta vacio");
        }
       
    }
    function VerificarUser(){
        $email = $_POST["input_user"];
        $pass = $_POST["input_pass"];
        if(!empty($email)){ 
            $usuarioFromDB = $this->model->GetUser($email);
            if(!empty($usuarioFromDB) && $usuarioFromDB ){ 
                if (password_verify($pass, $usuarioFromDB->password)){
                    $this->authHelper->login($usuarioFromDB);         
                    header("Location: ".BASE_URL."Comunidad");
                }else{
                    $this->view->ShowLogin("Contraseña incorrecta");
                }
            }else{
                $this->view->ShowLogin("El usuario no existe");
            }
        }
        else{
            $this->view->ShowLogin("No ingreso email");
        }
    }
    function Logout(){
        $this->authHelper->logout();
        $this->view->ShowLogin();
    }
    function ListaUsuarios(){
        $users = $this->model->GetUsers();
        $this->view->ShowUsers($users,$this->authHelper->getLogged());
    }
    function EditUser($params = null){
        $id = $params[':ID'];
        $user = $this->model->GetUserID($id);
        if($user->admin == 1){
            $this->model->EditAdmin($id,0);
        }
        else{
            $this->model->EditAdmin($id,1);
        }
        $this-> ListaUsuarios();
    }
    function DeleteUser($params = null){
        $id = $params[':ID'];
        $this->model->DeleteUser($id);
        $this->ListaUsuarios();
    }
}
