<?php /* Smarty version Smarty-3.1.19, created on 2018-07-12 11:50:20
         compiled from "module:advancedsearchbar/advancedsearchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9044506355b47164c287f05-71470203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5511f57999c834205cccc78c38f729b0b32d134b' => 
    array (
      0 => 'module:advancedsearchbar/advancedsearchbar.tpl',
      1 => 1531217390,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '9044506355b47164c287f05-71470203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b47164c294851_50431107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b47164c294851_50431107')) {function content_5b47164c294851_50431107($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\psgit\psgit/modules/advancedsearchbar/advancedsearchbar.tpl --><div id="sec_search_widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="" placeholder="cauta dupa cod produs sau denumire...">
		<div class="spinner hidden-md-up"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/ajax-loader.gif"/></div>
		<button type="submit"><i class="fas fa-search"></i> <span class="hidden-sm-down">cauta</span></button>
	</form>
</div>
<!-- end C:\xampp\htdocs\psgit\psgit/modules/advancedsearchbar/advancedsearchbar.tpl --><?php }} ?>
