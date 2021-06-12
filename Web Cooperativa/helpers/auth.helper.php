<?php

class AuthHelper {
    public function __construct() {}

    public function login($user) {
        // INICIO LA SESSION Y LOGUEO AL USUARIO
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['EMAIL'] = $user->email;
        $_SESSION['USER'] = $user->user;
        $_SESSION['ADMIN'] = $user->admin;
        $_SESSION['LAST_ACTIVITY'] = time();
    }
    public function logout() {
        session_start();
        session_destroy();
    }

    public function checkLoggedIn() {
        session_start();
        
        if(!isset($_SESSION["EMAIL"])){
            header("Location: ". LOGIN);
            die();
        }else{
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] >1000)) { 
                header("Location: ". LOGOUT); 
                die();
            } 
        
            $_SESSION['LAST_ACTIVITY'] = time();
        }      
    }
    public function getName() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
            if(isset($_SESSION['USER'])){
                if($_SESSION['USER'])
                    return $_SESSION['USER'];
            }        
            else
                return null;
    }
    public function getLogged() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
            if(isset($_SESSION['ID_USER'])){
                if($_SESSION['ID_USER'])
                    return $_SESSION['ID_USER'];
            }        
            else
                return null;
    }
    public function isAdmin() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
            if(isset($_SESSION['ADMIN'])&&$_SESSION['ADMIN']==1){
               return $_SESSION['ADMIN'];
            }
            else return null;
    }
}
