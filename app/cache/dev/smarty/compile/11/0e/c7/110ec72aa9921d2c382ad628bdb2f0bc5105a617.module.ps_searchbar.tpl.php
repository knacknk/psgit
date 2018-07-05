<?php /* Smarty version Smarty-3.1.19, created on 2018-07-05 15:53:32
         compiled from "module:ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14660825795b3e14cc075303-66287124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbar/ps_searchbar.tpl',
      1 => 1530268792,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '14660825795b3e14cc075303-66287124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b3e14cc08afc3_75611055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3e14cc08afc3_75611055')) {function content_5b3e14cc08afc3_75611055($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_searchbar/ps_searchbar.tpl -->
<!-- Block search module TOP -->
<div id="search_widget" class="search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
" aria-label="<?php echo smartyTranslate(array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
		<button type="submit">
			<i class="material-icons search">&#xE8B6;</i>
      <span class="hidden-xl-down"><?php echo smartyTranslate(array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<!-- end C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_searchbar/ps_searchbar.tpl --><?php }} ?>
