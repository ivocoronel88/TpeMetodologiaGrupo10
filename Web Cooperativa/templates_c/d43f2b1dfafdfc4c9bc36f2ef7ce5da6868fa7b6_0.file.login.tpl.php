<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-25 06:31:34
  from 'C:\xampp\htdocs\MetodologiaTPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ac7da6088089_19773164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd43f2b1dfafdfc4c9bc36f2ef7ce5da6868fa7b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MetodologiaTPE\\templates\\login.tpl',
      1 => 1621802416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60ac7da6088089_19773164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo_login']->value;?>
</h1>
<div class="container">
    <form action="verificarUser" method="post">
            <div class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" id="user" name="input_user" >
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="input_pass">
            </div>
            <div class="form-group">
            <button type="submit" class="botonEstilo btnColor2">Login</button>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['mensaje']->value) {?>
                <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
            <?php }?>
             
    </form>
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
