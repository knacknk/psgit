<?php /* Smarty version Smarty-3.1.19, created on 2018-07-06 12:13:22
         compiled from "C:\xampp\htdocs\psgit\psgit\sec_admin\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20203218275b3f32b2b7b3f5-43863459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c51f125a20db36afa29ccef902be632ed7b30e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\psgit\\psgit\\sec_admin\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1530268792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20203218275b3f32b2b7b3f5-43863459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b3f32b2b94304_78524245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3f32b2b94304_78524245')) {function content_5b3f32b2b94304_78524245($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
