<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-11 23:56:14
  from 'C:\xampp\htdocs\meto\templates\ShowHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c3dbfe415880_03093796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d535a2ae8c23ccd55a8a38344ead9e4d95431ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\meto\\templates\\ShowHome.tpl',
      1 => 1623448570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c3dbfe415880_03093796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<div class="portada">
    <h1 class="title">Recoop Cooperativa de Reciclaje</h1>
</div>
 
<p class="txthome">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type 
specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
of Lorem Ipsum.</p>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
