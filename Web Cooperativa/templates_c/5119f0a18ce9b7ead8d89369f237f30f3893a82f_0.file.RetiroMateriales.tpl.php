<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-25 08:09:33
  from 'C:\xampp\htdocs\MetodologiaTPE\templates\RetiroMateriales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ac949d5c76d8_83083167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5119f0a18ce9b7ead8d89369f237f30f3893a82f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MetodologiaTPE\\templates\\RetiroMateriales.tpl',
      1 => 1621922355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60ac949d5c76d8_83083167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="container">

    <form>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="nombre" placeholder="Nombre">
             </div>
        </div>
         <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Apellido</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="apellido" placeholder="Apellido">
             </div>
        </div>
         <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Dirección</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="direccion" placeholder="Direccion">
             </div>
        </div>
         <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Teléfono</label>
            <div class="col-sm-10">
                 <input type="number" class="form-control form-control-lg" id="telefono" placeholder="Telefono">
             </div>
        </div>
         <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Franja horaria</label>
            <div class="col-sm-10">
                <input type="time" class="form-control form-control-lg" id="franjaHorariaDesde" placeholder="Desde">
                <input type="time" class="form-control form-control-lg" id="franjaHorariaHasta" placeholder="Hasta">
             </div>
        </div>
         <p><button type="button" class="btn btn-primary">Enviar</button></p>
    </form>
    
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
