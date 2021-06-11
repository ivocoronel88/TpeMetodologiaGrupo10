<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-11 08:15:20
  from 'C:\xampp\htdocs\TpeMetodologiaGrupo10\Web Cooperativa\templates\ShowEdicionMaterial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c2ff78634d63_16145715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dba749451f1ddcb7227a8b873cb131a8fd1103b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeMetodologiaGrupo10\\Web Cooperativa\\templates\\ShowEdicionMaterial.tpl',
      1 => 1623392117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c2ff78634d63_16145715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <div class="container">
                <form action="modificarMaterial" method="post">
                    <div class="form-group">
                        <input type="hidden" id="material_id" name="material_id" value="<?php echo $_smarty_tpl->tpl_vars['material']->value->id;?>
">
                    </div>
                    <div class="form-group">
                        <label for="title">Material</label>
                        <input class="form-control" id="mterial" name="input_material" value="<?php echo $_smarty_tpl->tpl_vars['material']->value->tipo;?>
">
                      
                    </div>
                    <div class="form-group">
                        <label for="title">Entrega</label>
                        <input class="form-control" id="entrega" name="input_entrega"  value="<?php echo $_smarty_tpl->tpl_vars['material']->value->entrega;?>
">
                      
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
    </div>
    

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
