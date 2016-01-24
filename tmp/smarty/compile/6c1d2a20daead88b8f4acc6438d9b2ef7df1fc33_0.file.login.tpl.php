<?php
/* Smarty version 3.1.29, created on 2016-01-23 15:20:53
  from "/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/user/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a38c45151109_29291299',
  'file_dependency' => 
  array (
    '6c1d2a20daead88b8f4acc6438d9b2ef7df1fc33' => 
    array (
      0 => '/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/user/login.tpl',
      1 => 1453558848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_56a38c45151109_29291299 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="index.php?section=user&action=login" method="post">
    <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>

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
