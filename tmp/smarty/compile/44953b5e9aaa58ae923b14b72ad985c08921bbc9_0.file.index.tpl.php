<?php
/* Smarty version 3.1.29, created on 2016-01-23 15:01:34
  from "/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/customer/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a387be077328_50696917',
  'file_dependency' => 
  array (
    '44953b5e9aaa58ae923b14b72ad985c08921bbc9' => 
    array (
      0 => '/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/customer/index.tpl',
      1 => 1453557693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_56a387be077328_50696917 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
$_from = $_smarty_tpl->tpl_vars['customers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customer_0_saved_item = isset($_smarty_tpl->tpl_vars['customer']) ? $_smarty_tpl->tpl_vars['customer'] : false;
$_smarty_tpl->tpl_vars['customer'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customer']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['customer']->value) {
$_smarty_tpl->tpl_vars['customer']->_loop = true;
$__foreach_customer_0_saved_local_item = $_smarty_tpl->tpl_vars['customer'];
?>
    <p><a href="index.php?section=customer&action=view&id=<?php echo $_smarty_tpl->tpl_vars['customer']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['customer']->value->name;?>
</a></p>
<?php
$_smarty_tpl->tpl_vars['customer'] = $__foreach_customer_0_saved_local_item;
}
if ($__foreach_customer_0_saved_item) {
$_smarty_tpl->tpl_vars['customer'] = $__foreach_customer_0_saved_item;
}
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
