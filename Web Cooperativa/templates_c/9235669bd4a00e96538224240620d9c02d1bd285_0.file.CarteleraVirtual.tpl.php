<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 04:36:01
  from 'C:\xampp\htdocs\TpeMetodologiaGrupo10\Web Cooperativa\templates\CarteleraVirtual.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c56f115cddb7_15598252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9235669bd4a00e96538224240620d9c02d1bd285' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeMetodologiaGrupo10\\Web Cooperativa\\templates\\CarteleraVirtual.tpl',
      1 => 1623551497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c56f115cddb7_15598252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="portsoli">
    <h1 class="titlemye"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
</div>

<div class="formsoli">
    
<form>
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Nombre</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg " id="nombre" name="input_nombre" placeholder="Nombre">
               </div>
          </div>
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Apellido</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="apellido" name="input_apellido" placeholder="Apellido">
               </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Dirección</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control form-control-lg" id="direccion" name="input_direccion" placeholder="Direccion">
             </div>
          </div>
          <div class="form-group row">
               <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg colorgreen">Teléfono</label>
               <div class="col-sm-10">
                    <input type="number" class="form-control form-control-lg" id="telefono" name="input_telefono" placeholder="Telefono">
               </div>
          </div>
         <button type="submit" class="botonEstilo btnlog">Enviar</button>
    </form>
</div>

    <table class="table table-hover tabloide">
            <thead class="bg-success">
                <tr>
                    <th class="thtxt" scope="col">Postulaciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Postulacion 1</td>
                </tr>
                <tr>
                    <td>Postulacion 2</td>
                </tr>
                <tr>
                    <td>Postulacion 3</td>
                </tr>
            </tbody>
        </table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
