<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-25 06:32:33
  from 'C:\xampp\htdocs\MetodologiaTPE\templates\ShowHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ac7de16e9536_09479728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4842d8f59d903a894a787dd507a592f5a0e1062d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MetodologiaTPE\\templates\\ShowHome.tpl',
      1 => 1621840962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60ac7de16e9536_09479728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Home</h1>
<div class="container">
<p><img src="img/imagenfondo.jpg" class="imagenes"> </p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type 
specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
of Lorem Ipsum.</p>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
