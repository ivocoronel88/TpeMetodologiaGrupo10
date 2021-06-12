<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 08:50:44
  from 'C:\xampp\htdocs\TpeMetodologiaGrupo10\Web Cooperativa\templates\ShowCartonerosActivos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c4594400bb17_77527934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c81f283183acb0f11cc8c4d15427882454445b0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeMetodologiaGrupo10\\Web Cooperativa\\templates\\ShowCartonerosActivos.tpl',
      1 => 1623480579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:encabezadoSecretaria.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c4594400bb17_77527934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:encabezadoSecretaria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Cartoneros activos</h1>
<div class="container">
    <div class="row justify-content-start">
        <div style="width: 80%; float:left">
                    <table class="table table-striped">
                        <thead class="bg-success">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Vehiculo</th>
                </tr>
            </thead>
            <tbody>
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartoneros']->value, 'cartonero');
$_smarty_tpl->tpl_vars['cartonero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cartonero']->value) {
$_smarty_tpl->tpl_vars['cartonero']->do_else = false;
?>
                    <tr>
                        <td class="table-success"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->nombre;?>
</td>
                        <td class="table-success"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->dni;?>
</td>
                        <td class="table-success"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->direccion;?>
</td>
                        <td class="table-success"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->vehiculo;?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
                </div>
                <div style="width: 20%; float:right">
                        <p><button type="button" class="btn btn-primary">Agregar Cartonero</button></p>
                        <p><button type="button" class="btn btn-primary">Editar Cartonero</button></p>
                        <p><button type="button" class="btn btn-primary">Borrar Cartonero</button></p>

                </div>
            </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
