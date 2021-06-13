<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-11 23:30:44
  from 'C:\xampp\htdocs\meto\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c3d604b3e027_07143225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96e6c7dcd9843a4f2ad6d27e94580f899930a4ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\meto\\templates\\header.tpl',
      1 => 1623447043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c3d604b3e027_07143225 (Smarty_Internal_Template $_smarty_tpl) {
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
    <nav class="navbar navbar-expand-md bg-green navbar-light">

        <img class="imgnav" src="img\58568a5b4f6ae202fedf2713.png">
        <a class="navbar-brand" href="home"><h1 class="navtitle">Recoop</h1></a>
        <div class="container">

                <?php if ($_smarty_tpl->tpl_vars['userLogin']->value) {?>
                    <h4 class="hiuser">Bienvenido, <?php echo $_smarty_tpl->tpl_vars['userLogin']->value;?>
</h4>
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
                <button type="button" class="botonEstilo btnlog"> <a href="Login" class="text-white show-decoration-none"> Ingresar</a></button>
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
