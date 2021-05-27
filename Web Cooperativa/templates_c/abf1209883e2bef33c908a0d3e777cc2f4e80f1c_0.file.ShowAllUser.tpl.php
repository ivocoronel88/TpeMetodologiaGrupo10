<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-27 20:45:03
  from 'C:\xampp\htdocs\MetodologiaTPE\templates\ShowAllUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60afe8afbce133_98963813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abf1209883e2bef33c908a0d3e777cc2f4e80f1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MetodologiaTPE\\templates\\ShowAllUser.tpl',
      1 => 1622141084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60afe8afbce133_98963813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<div class="container">
               <table class="table table-hover">
            <thead class="bg-success">
                <tr>
                    <th scope="col">Listado  para consultar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="CartonerosActivos">Cartoneros activos</a></td>
                </tr>
                <tr>
                    <td><a href="Domicilios">Domicilios</a></td>
                </tr>
                <tr>
                    <td><a href="KilosMes">Kilos vendidos este mes</a></td>
                </tr>
            </tbody>
        </table>
    </div>


   

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
