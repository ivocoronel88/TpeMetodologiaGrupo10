<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-06 23:00:27
  from 'C:\xampp\htdocs\meto\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e4c46b14caf6_67003329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1d0257cc76718ab123ad30dd3d9b22d47bb09b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\meto\\templates\\footer.tpl',
      1 => 1625605224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e4c46b14caf6_67003329 (Smarty_Internal_Template $_smarty_tpl) {
?>                    <?php if ($_smarty_tpl->tpl_vars['titulo']->value == 'Materiales y entrega' && $_smarty_tpl->tpl_vars['userLogin']->value) {?>
                    <footer class="footer2">
                    <?php } else { ?>
                        <footer>
                    <?php }?>
                    <h1 class="foottitle">© 2021 Grupo 10 </h1>
                </footer>
                
                
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
