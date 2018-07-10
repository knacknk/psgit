<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 09:17:12
         compiled from "module:ps_banner/ps_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11589916925b444f685ac9f0-04833475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2018-06-29 17:43:40
         compiled from "module:ps_banner/ps_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3480683705b36459ce19986-12552761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_banner/ps_banner.tpl',
      1 => 1530268792,
      2 => 'module',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '11589916925b444f685ac9f0-04833475',
=======
  'nocache_hash' => '3480683705b36459ce19986-12552761',
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_link' => 0,
    'banner_desc' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD
  'unifunc' => 'content_5b444f685edd13_78135528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b444f685edd13_78135528')) {function content_5b444f685edd13_78135528($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_banner/ps_banner.tpl -->
=======
  'unifunc' => 'content_5b36459ce1db57_22759596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b36459ce1db57_22759596')) {function content_5b36459ce1db57_22759596($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_banner/ps_banner.tpl -->
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed
<a class="banner" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)) {?>
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
  <?php } else { ?>
    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<!-- end C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_banner/ps_banner.tpl --><?php }} ?>
