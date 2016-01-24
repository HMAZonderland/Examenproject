<?php
/* Smarty version 3.1.29, created on 2016-01-23 16:11:39
  from "/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/template/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a3982bd4e852_78299382',
  'file_dependency' => 
  array (
    '10e84559d0ac434cd567e45b7b4c30381b0f157e' => 
    array (
      0 => '/Users/Combidi/Box Sync/Combidi/PHP/Examenproject/resources/smarty/template/header.tpl',
      1 => 1453561899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a3982bd4e852_78299382 ($_smarty_tpl) {
?>
<!doctype html>

<html lang="nl">
<head>
    <meta charset="utf-8">

    <title>ANP Nieuws rotzooi</title>
    <meta name="description" content="Vette shit inelkaar hacken!">
    <meta name="author" content="Hugo natuurlijk">

    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    <div class="login">
        <?php if ($_smarty_tpl->tpl_vars['show_login']->value) {?>
            <a href="index.php?section=user&action=login">Login!</a>
        <?php } else { ?>
            Hallo <?php echo $_smarty_tpl->tpl_vars['user']->value->showName();?>
! <a href="index.php?section=user&action=logout">Logout!</a>
        <?php }?>
    </div>
</header>

<div id="container"><?php }
}
