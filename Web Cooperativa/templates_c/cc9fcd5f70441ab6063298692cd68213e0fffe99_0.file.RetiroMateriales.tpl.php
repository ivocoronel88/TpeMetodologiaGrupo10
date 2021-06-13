<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 04:53:48
  from 'C:\xampp\htdocs\TpeMetodologiaGrupo10\Web Cooperativa\templates\RetiroMateriales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c5733ccf8f50_73362651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc9fcd5f70441ab6063298692cd68213e0fffe99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeMetodologiaGrupo10\\Web Cooperativa\\templates\\RetiroMateriales.tpl',
      1 => 1623552808,
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
function content_60c5733ccf8f50_73362651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="portsoli">

    <h1 class="titlemye"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
</div>

<div class="formsoli">

    <form action="insertSolicitud" method="post">
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Nombre</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="direccion" name="input_direccion" placeholder="Direccion">
             </div>
          </div>   
        
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Apellido</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="apellido" name="input_apellido"
                    placeholder="Apellido">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Dirección</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="direccion" name="input_direccion"
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
        <button type="submit" class="botonEstilo btnlog">Enviar</button>
    </form>
  <?php $_smarty_tpl->_subTemplateRender("file:mapa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
