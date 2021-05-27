<?php

require_once "./View/View.php";
require_once "./Model/UserModel.php";
require_once "./Model/MaterialModel.php";
require_once "./Model/CartoneroModel.php";
require_once "./helpers/auth.helper.php";

class Controller{

    private $view;
    private $modelUser;
    private $modelMaterial;
    private $modelCartonero;
    private $authHelper;

    function __construct(){
        $this->view = new View();
        $this->modelUser = new UserModel();
        $this->modelMaterial = new MaterialModel();
        $this->modelCartonero = new CartoneroModel();
        $this->authHelper = new AuthHelper();
    }

    function Home(){
        $this->view->ShowHome();
    }
    function SolicitarMateriales(){
        $this->view->ShowSolicitarMateriales();
    }
    function MaterialesyEntrega(){
        $materiales = $this->modelMaterial->GetMateriales();
        $this->view->ShowMaterialesyEntrega($materiales);

    }
    function CarteleraVirtual(){
        $this->view->ShowCarteleraVirtual();
    }

    function CartonerosActivos(){
        $cartoneros = $this->modelCartonero->GetCartoneros();
        $this->view->ShowCartonerosActivos($cartoneros);
    }
    function Domicilios(){
        $domicilios = $this->modelCartonero->GetCartoneros();
        $this->view->ShowDomicilios($domicilios);
    }
    function KilosMes(){
        $KilosMes = $this->modelCartonero->GetCartoneros();
        $this->view->ShowKilosMes( $KilosMes);
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