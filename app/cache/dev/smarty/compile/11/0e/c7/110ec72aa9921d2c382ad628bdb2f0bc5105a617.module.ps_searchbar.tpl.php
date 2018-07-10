<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-06 12:14:18
         compiled from "module:ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8944178535b3f32ead2e0e4-60883593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2018-06-29 17:43:40
         compiled from "module:ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9354180285b36459cf1d9f4-01680718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed
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
<<<<<<< HEAD
  'nocache_hash' => '8944178535b3f32ead2e0e4-60883593',
=======
  'nocache_hash' => '9354180285b36459cf1d9f4-01680718',
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed
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
<<<<<<< HEAD
  'unifunc' => 'content_5b3f32ead42f75_79820206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3f32ead42f75_79820206')) {function content_5b3f32ead42f75_79820206($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_searchbar/ps_searchbar.tpl -->
=======
  'unifunc' => 'content_5b36459cf20bd3_20315447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b36459cf20bd3_20315447')) {function content_5b36459cf20bd3_20315447($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_searchbar/ps_searchbar.tpl -->
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed
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
