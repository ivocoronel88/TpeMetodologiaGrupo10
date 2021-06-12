<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 04:07:39
  from 'C:\xampp\htdocs\meto\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c416ebc177b8_63490606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02e29927a1510d21c4988a56c209948ac46d5031' => 
    array (
      0 => 'C:\\xampp\\htdocs\\meto\\templates\\login.tpl',
      1 => 1623463658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c416ebc177b8_63490606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="portmye">
<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['titulo_login']->value;?>
</h1>
</div>
<div class="formxd">
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
            <button type="submit" class="botonEstilo btnlog">Login</button>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['mensaje']->value) {?>
                <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
            <?php }?>
             
    </form>
    
</div>

<?php $_smarty_tpl->_assignInScope('titulo', "null");?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
