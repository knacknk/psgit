<?php /* Smarty version Smarty-3.1.19, created on 2018-07-06 12:11:02
         compiled from "C:\xampp\htdocs\psgit\psgit\sec_admin\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6315897855b3f3226553886-88975366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4307241e8d2827359c90b81eb1ac6bfc705b6093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\psgit\\psgit\\sec_admin\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1530268792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6315897855b3f3226553886-88975366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b3f322656a164_81438491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3f322656a164_81438491')) {function content_5b3f322656a164_81438491($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
