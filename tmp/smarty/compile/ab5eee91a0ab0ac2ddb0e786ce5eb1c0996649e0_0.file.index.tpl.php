<?php
/* Smarty version 3.1.29, created on 2016-01-25 21:35:36
  from "/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/order/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a68718a309c6_32314722',
  'file_dependency' => 
  array (
    'ab5eee91a0ab0ac2ddb0e786ce5eb1c0996649e0' => 
    array (
      0 => '/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/order/index.tpl',
      1 => 1453753477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_56a68718a309c6_32314722 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
$_from = $_smarty_tpl->tpl_vars['orders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_order_0_saved_item = isset($_smarty_tpl->tpl_vars['order']) ? $_smarty_tpl->tpl_vars['order'] : false;
$_smarty_tpl->tpl_vars['order'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['order']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$__foreach_order_0_saved_local_item = $_smarty_tpl->tpl_vars['order'];
?>
    <p><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['order']->value->name;?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['order']->value->price;?>
</p>
<?php
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_0_saved_local_item;
}
if ($__foreach_order_0_saved_item) {
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_0_saved_item;
}
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
