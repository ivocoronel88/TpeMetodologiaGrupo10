<?php
require_once "./libs/smarty/Smarty.class.php";
require_once "./helpers/auth.helper.php";

class View{
    private $smarty;
    private $authHelper;


    function __construct(){
        $this->smarty=new Smarty();
        $this->authHelper = new AuthHelper();
        $this->smarty->assign('userLogin', $this->authHelper->getName());
    }
    
    function ShowHome(){
        $this->smarty->assign('titulo', "Cooperativa");
        $this->smarty->display('templates/ShowHome.tpl'); 
    }
    function ShowSolicitarMateriales(){
        $this->smarty->assign('titulo', "Solicitud de materiales");
        $this->smarty->display('templates/RetiroMateriales.tpl'); 
    }
    function ShowMaterialesyEntrega($materiales){
        $this->smarty->assign('titulo', "Materiales y entrega");
        $this->smarty->assign('admin', $this->authHelper->isAdmin());
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->display('templates/ShowMaterialesyEntrega.tpl'); 
    }
    function ShowAllUser(){
        $this->smarty->assign('titulo',"Seccion secretaria");
        $this->smarty->assign('admin', $this->authHelper->isAdmin());
        $this->smarty->display('templates/ShowAllUser.tpl'); 
    }
    function ShowCarteleraVirtual(){
        $this->smarty->assign('titulo',"Cartelera virtual");
        $this->smarty->display('templates/CarteleraVirtual.tpl'); 
    }
    function ShowCartonerosActivos($cartoneros){
        $this->smarty->assign('titulo',"Seccion secretaria");
        $this->smarty->assign('cartoneros',$cartoneros);
        $this->smarty->display('templates/ShowCartonerosActivos.tpl'); 
    }
    function ShowDomicilios($domicilios){
        $this->smarty->assign('titulo',"Seccion secretaria");
        $this->smarty->assign('domicilios',$domicilios);
        $this->smarty->display('templates/ShowDomicilios.tpl'); 
    }
    function ShowKilosMes($kilos){
        $this->smarty->assign('titulo',"Seccion secretaria");
        $this->smarty->assign('kilos',$kilos);
        $this->smarty->display('templates/ShowKilosMes.tpl'); 
    }
    function mostrarEditarMaterial($material){
        $this->smarty->assign('titulo',"Edicion");
        $this->smarty->assign('material',$material);
        $this->smarty->display('templates/ShowEdicionMaterial.tpl'); 
    }
    function mostrarEditarCartonero($cartonero,$cartoneros){
        $this->smarty->assign('titulo',"Edicion");
        $this->smarty->assign('cartonero_s',$cartonero);
        $this->smarty->assign('cartoneros',$cartoneros);
        $this->smarty->display('templates/ShowEdicionCartonero.tpl'); 
    }
    function ShowUserLoc(){
        header("Location: ".BASE_URL.'user');
    }
    function ShowLogin(){
        header("Location: ".BASE_URL.'Login');
    }

}