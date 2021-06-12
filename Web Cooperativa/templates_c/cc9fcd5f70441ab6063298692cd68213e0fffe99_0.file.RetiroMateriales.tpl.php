<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 08:41:25
  from 'C:\xampp\htdocs\TpeMetodologiaGrupo10\Web Cooperativa\templates\RetiroMateriales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c45715c06dd7_30969502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc9fcd5f70441ab6063298692cd68213e0fffe99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeMetodologiaGrupo10\\Web Cooperativa\\templates\\RetiroMateriales.tpl',
      1 => 1623480082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:mapa.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c45715c06dd7_30969502 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="container">

    <form action="insertSolicitud" method="post">
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="nombre" name="input_nombre" placeholder="Nombre">
               </div>
          </div>
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Apellido</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="apellido" name="input_apellido" placeholder="Apellido">
               </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Dirección</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="direccion" name="input_direccion" placeholder="Direccion">
             </div>
          </div>
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Teléfono</label>
               <div class="col-sm-10">
                    <input type="number" class="form-control form-control-lg" id="telefono" name="input_telefono" placeholder="Telefono">
               </div>
          </div>
          <div>
               <label for="opciones">Franja horaria
                    <select class="form-select" id="opciones" name="input_franja">
                         <option value="9 a 12hs">9 a 12hs</option>
                         <option value="13 a 17hs">13 a 17hs</option>
                    </select>
               </label>
          </div>
         
          <button type="submit" class="botonEstilo btnColor1">Enviar</button>
          </form>
          
          <?php $_smarty_tpl->_subTemplateRender("file:mapa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
