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

    function CartonerosActivos(){
        $cartoneros = $this->modelCartonero->GetCartoneros();
        $this->view->ShowCartonerosActivos($cartoneros);
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