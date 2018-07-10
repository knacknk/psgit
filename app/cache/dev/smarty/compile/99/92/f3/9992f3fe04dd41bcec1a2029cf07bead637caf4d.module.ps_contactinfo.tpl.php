<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 09:17:14
         compiled from "module:ps_contactinfo/ps_contactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11338272275b444f6a670cb6-52532104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2018-06-29 17:43:41
         compiled from "module:ps_contactinfo/ps_contactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7046342675b36459d061b07-44153348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfo/ps_contactinfo.tpl',
      1 => 1530268792,
      2 => 'module',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '11338272275b444f6a670cb6-52532104',
=======
  'nocache_hash' => '7046342675b36459d061b07-44153348',
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD
  'unifunc' => 'content_5b444f6a753251_41518610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b444f6a753251_41518610')) {function content_5b444f6a753251_41518610($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_contactinfo/ps_contactinfo.tpl -->
=======
  'unifunc' => 'content_5b36459d06db00_41069056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b36459d06db00_41069056')) {function content_5b36459d06db00_41069056($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_contactinfo/ps_contactinfo.tpl -->
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed

<div class="block-contact col-md-4 links wrapper">
  <div class="hidden-sm-down">
    <h4 class="text-uppercase block-contact-title"><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h4>
      <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>

      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
        <br>
        
        <?php echo smartyTranslate(array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
        <br>
        
        <?php echo smartyTranslate(array('s'=>'Fax: [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
        <br>
        
        <?php echo smartyTranslate(array('s'=>'Email us: [1]%email%[/1]','sprintf'=>array('[1]'=>(('<a href="mailto:').($_smarty_tpl->tpl_vars['contact_infos']->value['email'])).('" class="dropdown">'),'[/1]'=>'</a>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

      <?php }?>
  </div>
  <div class="hidden-md-up">
    <div class="title">
      <a class="h3" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['stores'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
    </div>
  </div>
</div>
<!-- end C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }} ?>
