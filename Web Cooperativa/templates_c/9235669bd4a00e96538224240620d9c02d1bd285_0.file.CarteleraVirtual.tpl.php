<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 04:16:46
  from 'C:\xampp\htdocs\TpeMetodologiaGrupo10\Web Cooperativa\templates\CarteleraVirtual.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c56a8e1729f7_35752593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9235669bd4a00e96538224240620d9c02d1bd285' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeMetodologiaGrupo10\\Web Cooperativa\\templates\\CarteleraVirtual.tpl',
      1 => 1623549420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c56a8e1729f7_35752593 (Smarty_Internal_Template $_smarty_tpl) {
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
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
            <div class="col-sm-10">
                 <input type="email" class="form-control form-control-lg" id="email" placeholder="Email">
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
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Espacio Disponible</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="EspacioDisponible" placeholder="Pon aquello que quieres que tengamos en cuenta!">
            </div>
        </div>
         <p><button type="button" class="btn btn-primary">Enviar</button></p>
    </form>
    <table class="table table-hover">
            <thead class="bg-success">
                <tr>
                    <th scope="col">Postulaciones</th>
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
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
