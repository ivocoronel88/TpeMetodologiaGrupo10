<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-27 20:45:45
  from 'C:\xampp\htdocs\MetodologiaTPE\templates\ShowMaterialesyEntrega.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60afe8d93287b1_11311310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dffe04d6ca9c2833cac979dccd8a1b938f7f671a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MetodologiaTPE\\templates\\ShowMaterialesyEntrega.tpl',
      1 => 1622141141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60afe8d93287b1_11311310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="container">
    <div class="col-9">
        <table class="table table-striped">
            <thead class="bg-success">
                <tr>
                    <th scope="col">Materiales que se aceptan</th>
                    <th scope="col">Formas de entrega</th>
                </tr>
            </thead>
            <tbody>
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materiales']->value, 'materialito');
$_smarty_tpl->tpl_vars['materialito']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['materialito']->value) {
$_smarty_tpl->tpl_vars['materialito']->do_else = false;
?>
                    <tr>
                        <td class="table-success"><?php echo $_smarty_tpl->tpl_vars['materialito']->value->tipo;?>
</td>
                        <td class="table-success"><?php echo $_smarty_tpl->tpl_vars['materialito']->value->entrega;?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <form>

                <div class="row justify-content-start">
                    <div class="col-4">
                        <input type="text" class="form-control form-control-lg" id="material" placeholder="Material">
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control form-control-lg" id="entrega" placeholder="Entrega">
                    </div>
                </div>
           
            </form>
            <div class="row justify-content-start">
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Insertar Nuevo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">Eliminar</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">Editar</label>
                    </div>
                </div>
                <div class="col-4">
                      <p><button type="button" class="btn btn-primary">Enviar</button></p>

                </div>
            </div>
<?php }?>

                
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
