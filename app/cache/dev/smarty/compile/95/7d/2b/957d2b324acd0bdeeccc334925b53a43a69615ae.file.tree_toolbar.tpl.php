<?php /* Smarty version Smarty-3.1.19, created on 2018-07-06 12:11:02
         compiled from "C:\xampp\htdocs\psgit\psgit\sec_admin\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7146102695b3f32264e5f90-42885734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '957d2b324acd0bdeeccc334925b53a43a69615ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\psgit\\psgit\\sec_admin\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1530268792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7146102695b3f32264e5f90-42885734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b3f3226502f98_62642480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3f3226502f98_62642480')) {function content_5b3f3226502f98_62642480($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div>
<?php }} ?>
