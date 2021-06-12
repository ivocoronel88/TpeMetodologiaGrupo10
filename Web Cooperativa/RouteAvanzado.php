<?php
    require_once 'Controller/Controller.php';
    require_once 'RouterClass.php';
    require_once 'Controller/UserController.php';
    require_once 'Controller/MaterialesController.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/Login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/Logout');
    
    $r = new Router();

    // rutas
    $r->addRoute("Home", "GET", "Controller", "Home");
    
    $r->addRoute("SolicitarMateriales", "GET", "Controller", "SolicitarMateriales");
    $r->addRoute("CarteleraVirtual", "GET", "Controller", "CarteleraVirtual");
    $r->addRoute("Login", "GET", "UserController", "Login");
    $r->addRoute("CartonerosActivos", "GET", "Controller", "CartonerosActivos");
    $r->addRoute("Domicilios", "GET", "Controller", "Domicilios");
    $r->addRoute("KilosMes", "GET", "Controller", "KilosMes");
    
    $r->addRoute("insertPeso", "POST", "Controller", "InsertPeso");
    $r->addRoute("insertSolicitud", "POST", "Controller", "InsertSolicitud");
    $r->addRoute("MaterialesyEntrega", "GET", "MaterialesController", "MaterialesyEntrega");
    //ABM DE MATERIALEs
    $r->addRoute("insertMaterial", "POST", "MaterialesController", "InsertMaterial");
    $r->addRoute("deleteMaterial/:ID", "GET", "MaterialesController", "DeleteMaterial");
    $r->addRoute("editMaterial/:ID", "GET", "MaterialesController", "EditMaterial");
    $r->addRoute("modificarMaterial", "POST", "MaterialesController", "ModificarMaterial");
  
    //Boton user
    $r->addRoute("user", "GET", "Controller", "User");
    
    //AB de usuarios y la ista
    $r->addRoute("listaUsuarios", "GET", "UserController", "ListaUsuarios");
    $r->addRoute("editUser/:ID", "GET", "UserController", "EditUser");
    $r->addRoute("deleteUser/:ID", "GET", "UserController", "DeleteUser");
    
    //REGISTRACION, LOGIN Y LOGOUT
    $r->addRoute("registrarse", "GET", "UserController", "Registracion");
    $r->addRoute("registracionUser", "POST", "UserController", "RegistracionUser");

    $r->addRoute("verificarUser", "POST", "UserController", "verificarUser");
    $r->addRoute("Logout", "GET", "UserController", "Logout");
   
  
    
  

    //Ruta por defecto.
    $r->setDefaultRoute("Controller", "Home");
    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
