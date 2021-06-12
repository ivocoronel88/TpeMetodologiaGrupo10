<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 03:43:54
  from 'C:\xampp\htdocs\meto\templates\ShowAllUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c4115ac60168_03946561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac673fce417d450410645be291b7f14a5cbf9762' => 
    array (
      0 => 'C:\\xampp\\htdocs\\meto\\templates\\ShowAllUser.tpl',
      1 => 1623462221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c4115ac60168_03946561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="portmye">
  <h1 class="titlemye"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
</div>

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
