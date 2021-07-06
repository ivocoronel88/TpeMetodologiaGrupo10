<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-06 23:18:32
  from 'C:\xampp\htdocs\meto\templates\ShowCartonerosActivos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e4c8a82a0017_45458795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0578b33c77e5ad344331456af0c3736fd6fda16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\meto\\templates\\ShowCartonerosActivos.tpl',
      1 => 1625606308,
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
function content_60e4c8a82a0017_45458795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:encabezadoSecretaria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<h1 class="colorgreen h1cartonero">Cartoneros activos</h1>
    <table class="table table-hover">
        <thead class="bg-success">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Dni</th>
                <th scope="col">Dirección</th>
                <th scope="col">Vehiculo</th>
                <th scope="col">Peso de Materiales</th>
                <th scope="col">Editar y Borrar</th>
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
                            <button type="button" class="btn btn-warning"><a class="text-white text-decoration-none" href="EditarCartonero/<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->id;?>
">Menu</a></button>
                            <button type="button" class="btn btn-danger"><a class="text-white text-decoration-none" href="DeleteCartonero/<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->id;?>
">Borrar</a></button>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

    <div class="addc">
    <button type="button" class="botonEstilo btnlog" data-toggle="modal" data-target="#myModal3">Agregar Cartonero</button>
    </div>

    <div class="formcartonero">
        <form action="insertPeso" method="post">
            <label for="opciones">
                <p class="colorgreen">Cartonero</p>
                <select id="opciones" name="input_cartonero">
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

    <div class="modal" id="myModal3">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Título -->
                <div class="modal-header">
                    <h4 class="modal-title">Ingresar Nuevo Cartonero</h4>
                </div>
                <!-- Modal Cuerpo -->
                <div class="modal-body">
                    <div class="form-group">
                        <form action="InsertarCartonero" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Nombre</label>
                                <input class="form-control" id="nombre" name="input_nombre" aria-describedby="emailHelp"
                                    placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="description">Dni</label>
                                <input class="form-control" id="dni" name="input_dni" placeholder="Dni">
                            </div>
                            <div class="form-group">
                                <label for="description">Direccion</label>
                                <input class="form-control" id="direcicon" name="input_direccion" placeholder="Direccion">
                            </div>
                            <div class="form-group">
                                <label for="description">Vehìculo</label>
                                <input class="form-control" id="vehiculo" name="input_vehiculo"
                                    placeholder="Vehìculo">
                            </div>
                            <!-- Modal botón Editar -->
                            <div>
                                <button type="submit" class="btn btn-info">Ingresar Cartonero</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="none">
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
