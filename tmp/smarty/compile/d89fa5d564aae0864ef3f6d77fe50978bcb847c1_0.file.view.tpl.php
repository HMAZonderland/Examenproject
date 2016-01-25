<?php
/* Smarty version 3.1.29, created on 2016-01-25 21:45:02
  from "/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/order/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a6894e02f519_46456153',
  'file_dependency' => 
  array (
    'd89fa5d564aae0864ef3f6d77fe50978bcb847c1' => 
    array (
      0 => '/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/order/view.tpl',
      1 => 1453753502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_56a6894e02f519_46456153 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<p><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['order']->value->name;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['order']->value->price;?>
</p>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
