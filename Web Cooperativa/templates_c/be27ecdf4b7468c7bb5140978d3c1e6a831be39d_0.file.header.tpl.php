<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-25 07:04:58
  from 'C:\xampp\htdocs\MetodologiaTPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ac857a6679c7_81719233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be27ecdf4b7468c7bb5140978d3c1e6a831be39d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MetodologiaTPE\\templates\\header.tpl',
      1 => 1621919077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ac857a6679c7_81719233 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Boceto Home</title> 
  <base href="<?php echo BASE_URL;?>
">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>

  </head>

<body>
    <!-- BARRA DE NAVEGACIÓn -->
    <nav class="navbar navbar-expand-md bg-light navbar-light">

        <a class="navbar-brand" href="home">Cooperativa Cartoneros</a>
        <div class="container">

                <?php if ($_smarty_tpl->tpl_vars['userLogin']->value) {?>
                    <h4><?php echo $_smarty_tpl->tpl_vars['userLogin']->value;?>
, Te damos la bienvenida</h4>
                <?php } else { ?> 
                <h4>Invitado, le damos la bienvenida</h4>

                <?php }?>
        </div>
        <!-- Navbar links -->
        <div class="container d-flex flex-row-reverse">
        <ul class="navbar-nav">
        <?php if ($_smarty_tpl->tpl_vars['userLogin']->value) {?>
            <li class="nav-item">
            <button type="button" class="botonEstilo btnColor3"> <a href="Logout" class="text-white show-decoration-none"> Cerrar sesión</a></button>
            </li>
        <?php } else { ?>
            <li class="nav-item">
                <button type="button" class="btn btn-primary"> <a href="Login" class="text-white show-decoration-none"> Ingresar</a></button>
            </li>
        <?php }?>


            </ul>
        </div>
    </nav>
 
  <nav class="navbar navbar-expand-lg navbar-dark nav-bk2">
    
    <ul class="navbar-nav">

      <li  class="nav-item">
        <a class="nav-link text-light" href="SolicitarMateriales">Solicitar retiros de materiales</a>
      </li>
      <li  class="nav-item">
        <a class="nav-link text-light" href="MaterialesyEntrega">Materiales y forma de entrega</a>
      </li>
      <li  class="nav-item">
        <a  class="nav-link text-light" href="CarteleraVirtual">Cartelera virtual</a>
      </li>
      <li  class="nav-item">
        <a class="nav-link text-light"  href="user">Seccion Secretaria</a>
      </li>
     
    </ul>

  </nav><?php }
}
