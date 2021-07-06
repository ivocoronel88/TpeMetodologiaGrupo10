<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-06 22:25:47
  from 'C:\xampp\htdocs\meto\templates\RetiroMateriales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e4bc4b0ebaf1_34911568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7fbf295a70d0b77583d25dfad62ede30c7b189a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\meto\\templates\\RetiroMateriales.tpl',
      1 => 1623861088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60e4bc4b0ebaf1_34911568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="./js/form.js"><?php echo '</script'; ?>
>
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
    <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="css/map.css">
<div class="portsoli">

    <h1 class="titlemye"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
</div>

<div class="formsoli">

    <form action="insertSolicitud" method="post" id="form">
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Nombre</label>
            <div class="col-sm-10">
                 <input id="nombre" type="text" class="form-control form-control-lg" id="direccion" name="input_nombre" placeholder="Nombre">
             </div>
          </div>   
        
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Apellido</label>
            <div class="col-sm-10">
                <input type="text" id="apellido" class="form-control form-control-lg" id="apellido" name="input_apellido"
                    placeholder="Apellido">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Dirección</label>
            <div class="col-sm-10">
                <input id="direccion" type="text" class="form-control form-control-lg" id="direccion" name="input_direccion"
                    placeholder="Direccion">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Teléfono</label>
            <div class="col-sm-10">
                <input type="number" class="form-control form-control-lg" id="telefono" name="input_telefono"
                    placeholder="Telefono">
            </div>
        </div>
        <div class="horita">
            <label for="opciones">
                <p class="colorgreen">Franja horaria</p>
                <select class="form-select" id="opciones" name="input_franja">
                    <option value="primerHorario">9 a 12hs</option>
                    <option value="segundoHorario">13 a 17hs</option>
                </select>
            </label>
        </div>
        <label for="colFormLabelLg" class="labelformap col-sm-2 col-form-label col-form-label-lg colorgreen">Su ubicacion</label>
        <div id = 'map'>
        </div>
        <button id="btn_enviar_submit" type="submit" class="botonEstilo btnlog">Enviar Datos</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
