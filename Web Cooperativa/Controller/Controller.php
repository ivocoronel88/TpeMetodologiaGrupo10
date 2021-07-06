<?php

require_once "./View/View.php";
require_once "./Model/UserModel.php";
require_once "./Model/CartoneroModel.php";
require_once "./Model/SolicitudModel.php";
require_once "./helpers/auth.helper.php";

class Controller{

    private $view;
    private $modelUser;
    private $modelCartonero;
    private $modelSolicitud;
    private $authHelper;

    function __construct(){
        $this->view = new View();
        $this->modelUser = new UserModel();
        $this->modelCartonero = new CartoneroModel();
        $this->modelSolicitud = new SolicitudModel();
        $this->authHelper = new AuthHelper();
    }

    function Home(){
        $this->view->ShowHome();
    }
    function SolicitarMateriales(){
        $this->view->ShowSolicitarMateriales();
    }
    function InsertSolicitud(){
        if(isset($_POST['input_nombre'])){
            $this->modelSolicitud->InsertSolicitud($_POST['input_nombre'],$_POST['input_apellido'],$_POST['input_direccion'],$_POST['input_telefono'],$_POST['input_franja']);
        }
        $this->view->ShowSolicitarMateriales();
    }
    
    function CarteleraVirtual(){
        $this->view->ShowCarteleraVirtual();
    }

    function InsertPeso(){
        if(isset($_POST['input_peso'])||isset($_POST['input_cartonero'])){
            $cartonero = $this->modelCartonero->GetCartonero($_POST['input_cartonero']);
            $peso= $_POST['input_peso'] + $cartonero->peso_materiales;
            $this->modelCartonero->InsertPeso($peso,$_POST['input_cartonero']);
        }
        $this->CartonerosActivos();
    }
    function CartonerosActivos(){
        $cartoneros = $this->modelCartonero->GetCartoneros();
        $this->view->ShowCartonerosActivos($cartoneros);
    }
    function InsertarCartonero(){
        if(isset($_POST['input_nombre'])||isset($_POST['input_dni'])||isset($_POST['input_direccion'])||isset($_POST['input_vehiculo'])){
            $this->modelCartonero->InsertCartonero($_POST['input_nombre'],$_POST['input_dni'],$_POST['input_direccion'],$_POST['input_vehiculo']);
        }
        $this->CartonerosActivos();
    
    }
    function EditarCartonero($params = null){
        $cartonero_id = $params[':ID'];
        $cartonero = $this->modelCartonero->GetCartonero($cartonero_id);
        $cartoneros = $this->modelCartonero->GetCartoneros();
        $this->view->mostrarEditarCartonero($cartonero, $cartoneros);
    }

    function ModificarCartonero(){
        if(isset($_POST['cartonero_id'])||isset($_POST['edit_nombre'])||isset($_POST['edit_dni'])||isset($_POST['edit_direccion'])||isset($_POST['edit_vehiculo'])){
            $this->modelCartonero->EditarCartonero($_POST['cartonero_id'],$_POST['edit_nombre'],$_POST['edit_dni'],$_POST['edit_direccion'],$_POST['edit_vehiculo']);
        }
        $this->CartonerosActivos();
    
    }
    function DeleteCartonero($params=null){
        $cartonero_id = $params[':ID'];
        $this->modelCartonero->DeleteCartonero($cartonero_id);
        $this->CartonerosActivos();
    }
    function Domicilios(){
        $domicilios = $this->modelSolicitud->GetSolicitudes();
        $this->view->ShowDomicilios($domicilios);
    }
    function KilosMes(){
        
        $this->view->ShowAllUser();
    }

    function User(){
        $userName =  $this->authHelper->getLogged();
        if($userName){ 
            $this->view->ShowAllUser($userName);
        }
        else  
            $this->view->ShowLogin();
    }
}