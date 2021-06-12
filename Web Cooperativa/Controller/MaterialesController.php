<?php

require_once "./View/View.php";
require_once "./Model/UserModel.php";
require_once "./Model/MaterialModel.php";
require_once "./helpers/auth.helper.php";

class MaterialesController{

    private $view;
    private $modelUser;
    private $modelMaterial;
    private $authHelper;

    function __construct(){
        $this->view = new View();
        $this->modelUser = new UserModel();
        $this->modelMaterial = new MaterialModel();
        $this->authHelper = new AuthHelper();
    }

    function MaterialesyEntrega(){
        $materiales = $this->modelMaterial->GetMateriales();
        $this->view->ShowMaterialesyEntrega($materiales);

    }
    function InsertMaterial(){
        if(isset($_POST['input_material'])){
            $this->modelMaterial->InsertMaterial($_POST['input_material'],$_POST['input_entrega']);
        }
        $this->MaterialesyEntrega();
    }
    function DeleteMaterial($params = null){
        $material_id = $params[':ID'];
        $this->modelMaterial->DeleteMaterial($material_id);
        $this->MaterialesyEntrega();
    }
    function EditMaterial($params = null){
        $material_id = $params[':ID'];
        $material = $this->modelMaterial->GetMaterial($material_id);
        $this->view->mostrarEditarMaterial($material);
    }
    function ModificarMaterial(){
        if(isset($_POST['input_material'])){
            $this->modelMaterial->EditMaterial($_POST['material_id'],$_POST['input_material'],$_POST['input_entrega']);
        }
        $this->MaterialesyEntrega();
    }
    
}