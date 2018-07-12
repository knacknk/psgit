<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 17:09:58
         compiled from "C:\xampp\htdocs\psgit\psgit\sec_admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7670242335b44be360b57a3-01781216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a00d3466525eb4d1b85adfed1211fd020f17ed44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\psgit\\psgit\\sec_admin\\themes\\default\\template\\content.tpl',
      1 => 1530268791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7670242335b44be360b57a3-01781216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b44be360c1816_86633504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b44be360c1816_86633504')) {function content_5b44be360c1816_86633504($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
