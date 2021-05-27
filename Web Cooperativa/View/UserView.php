<?php

require_once "./libs/smarty/Smarty.class.php";
require_once "./helpers/auth.helper.php";

class UserView{
    private $title;
    private $authHelper;

    function __construct(){
        $this->title = "Loguearse";
        $this->authHelper = new AuthHelper();
    }
    
    function ShowLogin($mensaje = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo_login', $this->title);
        $smarty->assign('userLogin', $this->authHelper->getName());
        $smarty->assign('mensaje', $mensaje);
        $smarty->display('templates/login.tpl'); 
    }
    function ShowRegistracion($mensaje = ""){
        $smarty = new Smarty();
        $smarty->assign('registracion', "Registracion");
        $smarty->assign('mensaje', $mensaje);
        $smarty->display('templates/registrarse.tpl'); 
    }
    function ShowUsers($users,$userSession){
        $smarty = new Smarty();
        $smarty->assign('titulo', "Listado de Usuarios");
        $smarty->assign('userSession',$userSession);
        $smarty->assign('users',$users);
        $smarty->display('templates/ShowUsers.tpl'); 
    }

    function mostrarLoguearse(){
        header("Location: ".BASE_URL."Login");
    }
    


    
}