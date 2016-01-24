<?php
/* Smarty version 3.1.29, created on 2016-01-23 15:48:40
  from "/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/customer/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a392c82944c5_45609292',
  'file_dependency' => 
  array (
    'abb10be2cba869f5fdfa678afe9138c0235e3ca5' => 
    array (
      0 => '/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/customer/view.tpl',
      1 => 1453557966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_56a392c82944c5_45609292 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>#<?php echo $_smarty_tpl->tpl_vars['customer']->value->id;?>
 = <?php echo $_smarty_tpl->tpl_vars['customer']->value->name;?>
</h1>
<p><a href="index.php?section=customer&action=index">Terug naar de index</a></p>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
