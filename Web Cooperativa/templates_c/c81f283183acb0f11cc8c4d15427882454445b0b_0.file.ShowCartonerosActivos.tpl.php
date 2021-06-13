<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 09:03:41
  from 'C:\xampp\htdocs\TpeMetodologiaGrupo10\Web Cooperativa\templates\ShowCartonerosActivos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c5adcd0fde39_87401819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c81f283183acb0f11cc8c4d15427882454445b0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeMetodologiaGrupo10\\Web Cooperativa\\templates\\ShowCartonerosActivos.tpl',
      1 => 1623567813,
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
function content_60c5adcd0fde39_87401819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:encabezadoSecretaria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="colorgreen">Cartoneros activos</h1>
<div class="container">
               <table class="table table-hover">
            <thead class="bg-success">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Dni</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Vehiculo</th>
                        <th scope="col">Peso de Materiales</th>
                        <th scope="col">Borrar y editar</th>
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
                            <?php if ($_smarty_tpl->tpl_vars['cartonero']->value->peso_materiales == NULL) {?>
                                <td class="table-success">No hay peso asignado</td>
                            <?php } else { ?>
                                <td class="table-success"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->peso_materiales;?>
 kg</td>
                            <?php }?>
                            <td class="table-success">
                            <button type="button" class="btn btn-danger btnmm"><h3 class="btnmgm">Borrar</h3></a></button> 
                            <button type="button" class="btn btn-primary btnmm"><h3 class="btnmgm">Editar</h3></a></button>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        
    </div>
    <div class="formsito">
    <button type="submit" class="botonEstilo btnlog">Agregar cartonero</button>
    </div>
    
    <div class="formsoli">
        <form action="insertPeso" method="post">
            <label for="opciones">
                <p class="colorgreen">Cartonero</p>
                <select  id="opciones" name="input_cartonero">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartoneros']->value, 'cartonero');
$_smarty_tpl->tpl_vars['cartonero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cartonero']->value) {
$_smarty_tpl->tpl_vars['cartonero']->do_else = false;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->dni;?>
><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->nombre;?>
</option>           
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </label>
            <input type="number" name="input_peso" placeholder="Peso de la balanza">
            <button type="submit" class="botonEstilo btnlog">Enviar</button>
        </form>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
