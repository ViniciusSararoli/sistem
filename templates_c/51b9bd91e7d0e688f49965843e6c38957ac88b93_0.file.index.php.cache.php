<?php
/* Smarty version 3.1.39, created on 2021-08-04 02:16:45
  from 'C:\wamp64\www\sistem\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6109f88d51abe8_31006441',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '51b9bd91e7d0e688f49965843e6c38957ac88b93' => 
    array (
      0 => 'C:\\wamp64\\www\\sistem\\index.php',
      1 => 1628043283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6109f88d51abe8_31006441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3266524176109f88d4c5522_48820939';
echo '/*%%SmartyNocache:3266524176109f88d4c5522_48820939%%*/<?php echo \'<?php 
\';?>
/*/%%SmartyNocache:3266524176109f88d4c5522_48820939%%*/';?>
include_once("config.php");

$c = new Controller();
$c->actionController($_REQUEST['action'],$smarty);
<?php echo '/*%%SmartyNocache:3266524176109f88d4c5522_48820939%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:3266524176109f88d4c5522_48820939%%*/';
}
}
