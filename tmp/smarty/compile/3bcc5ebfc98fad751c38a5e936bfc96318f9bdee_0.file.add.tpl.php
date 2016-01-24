<?php
/* Smarty version 3.1.29, created on 2016-01-23 15:34:02
  from "/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/user/add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a38f5a0012e3_31114141',
  'file_dependency' => 
  array (
    '3bcc5ebfc98fad751c38a5e936bfc96318f9bdee' => 
    array (
      0 => '/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/user/add.tpl',
      1 => 1453559627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_56a38f5a0012e3_31114141 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="index.php?section=user&action=add" method="post">
    <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>

    <label for="company">Selecteer een bedrijf</label>
    <select name="customer_id" id="company">
        <option>Selecteer een bedrijf</option>
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
            <option value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['customer']->value->name;?>
</option>
        <?php
$_smarty_tpl->tpl_vars['customer'] = $__foreach_customer_0_saved_local_item;
}
if ($__foreach_customer_0_saved_item) {
$_smarty_tpl->tpl_vars['customer'] = $__foreach_customer_0_saved_item;
}
?>
    </select>
    <br />
    <label for="username">Username:</label>
    <input name="username" id="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" />
    <br />
    <label for="password">Password:</label>
    <input name="password" id="password" type="password" />
    <br />
    <br />
    <input type="submit" value="Login!" />
</form>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
