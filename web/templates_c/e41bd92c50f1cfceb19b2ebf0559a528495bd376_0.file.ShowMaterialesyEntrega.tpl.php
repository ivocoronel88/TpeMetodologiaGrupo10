<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 04:11:01
  from 'C:\xampp\htdocs\meto\templates\ShowMaterialesyEntrega.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c417b5673e33_14625883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e41bd92c50f1cfceb19b2ebf0559a528495bd376' => 
    array (
      0 => 'C:\\xampp\\htdocs\\meto\\templates\\ShowMaterialesyEntrega.tpl',
      1 => 1623463835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c417b5673e33_14625883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="portmye">
    <h1 class="titlemye"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
</div>

<div class="container">
        <table class="table table-striped">
            <thead class="bg-success">
                <tr>
                    <th class="thtxt" scope="col">Materiales que se aceptan</th>
                    <th class="thtxt" scope="col">Formas de entrega</th>
                    <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                     <th class="thtxt" scope="col">Borrar y editar</th>
                    <?php }?>

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
                        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                         <td class="table-success">
                            <button type="button" class="btn btn-danger btnmm"><a href="deleteMaterial/<?php echo $_smarty_tpl->tpl_vars['materialito']->value->id;?>
 "><h3 class="btnmgm">Borrar</h3></a></button> 
                            <button type="button" class="btn btn-primary btnmm"><a href="editMaterial/<?php echo $_smarty_tpl->tpl_vars['materialito']->value->id;?>
"><h3 class="btnmgm">Editar</h3></a></button>
                        </td>
                        <?php }?>
                        
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>





        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <div class="formsito">
                <form class="mb-5" action="insertMaterial" method="post" >
                    <div class="form-group">
                        <label for="title" class="form-label">Material</label>
                        <input class="form-control" id="mterial" name="input_material" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Entrega</label>
                        <input class="form-control" id="entrega" name="input_entrega" aria-describedby="emailHelp">
                      
                    </div>
                    
                    <button type="submit" class="botonEstilo btnlog">Agregar</button>
                </form>

        
<?php }?>

                
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
