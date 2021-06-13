<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 07:52:49
  from 'C:\xampp\htdocs\TpeMetodologiaGrupo10\Web Cooperativa\templates\ShowHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c59d31ef0b14_38039644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bb885bdceb7ca8e5b1868ea1564f5b675cb1552' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeMetodologiaGrupo10\\Web Cooperativa\\templates\\ShowHome.tpl',
      1 => 1623551497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c59d31ef0b14_38039644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="portada">
        <h1 class="title">Recoop Cooperativa de Reciclaje</h1>
        <p class="pport">Somos un grupo de personas a favor del medio ambiente que se encarga de
            contactar recolectores de residuos con vecinos que esten dispuestos a ayudarnos a reducir
            el impacto humano sobre nuestros ecosistemas.</p>
        <p class="pport">
            En este sitio usted podra visualizar las maneras de preparar
            sus residuos para su futuro reciclado, como contactar a nuestros recolectores y el beneficio que esto genera
            al ambiente.</p>
        <h4 class="subtitlehome">¡Le damos la Bienvenida!</h4>
    </div>

    <h4 class="subtitledesc">¿Por qué reciclar ayuda al medio ambiente?</h4>
    <p class="txthome">
        Reciclando evitamos que los productos y materiales se conviertan en residuos, transformándolos en otros
        completamente nuevos, alargando su vida útil y ayudando a la preservación de los recursos naturales del planeta.
        El reciclaje forma parte de la Economía Circular, el modelo basado en aprovechar al 100% las materias primas,
        haciendo más eficientes los procesos de uso y fabricación.</p>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
