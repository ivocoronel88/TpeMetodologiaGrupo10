<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 08:24:51
  from 'C:\xampp\htdocs\TpeMetodologiaGrupo10\Web Cooperativa\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c45333191786_43467866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7034983612e5f39215fcbbc8882245de13a98f9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeMetodologiaGrupo10\\Web Cooperativa\\templates\\header.tpl',
      1 => 1623479073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c45333191786_43467866 (Smarty_Internal_Template $_smarty_tpl) {
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
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
  <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
  integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
  crossorigin=""><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
  <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"><?php echo '</script'; ?>
>
  
  
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
      <?php if ($_smarty_tpl->tpl_vars['userLogin']->value) {?>
        <li  class="nav-item">
          <a class="nav-link text-light"  href="user">Seccion Secretaria</a>
        </li>
      <?php }?>
      
     
    </ul>

  </nav><?php }
}
