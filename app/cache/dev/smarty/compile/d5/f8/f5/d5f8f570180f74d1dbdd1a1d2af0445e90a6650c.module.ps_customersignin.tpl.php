<?php /* Smarty version Smarty-3.1.19, created on 2018-07-12 11:22:52
         compiled from "module:ps_customersignin/ps_customersignin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12390596385b470fdc135dd8-44653887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersignin/ps_customersignin.tpl',
      1 => 1531217390,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '12390596385b470fdc135dd8-44653887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_account_url' => 0,
    'logged' => 0,
    'customer' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b470fdc17c111_66555051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b470fdc17c111_66555051')) {function content_5b470fdc17c111_66555051($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_customersignin/ps_customersignin.tpl --><div id="account">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="account-icon"></span></a>
    <div class="account-info hidden-md-down">
        <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
            <a
                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    title="Contul meu"
                    rel="nofollow"
            >
                <span class="hidden-md-down">Contul meu</span>
            </a>
        <?php } else { ?>
            <a
                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
"
                    rel="nofollow"
            >
                <span class="hidden-md-down">Contul meu</span>
            </a>
        <?php }?>
    </div>
    <span class="down-arrow hidden-md-down"></span>

    <div class="collapse" id="account-expanded">
        <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
            <div class="account-top">
                <span class="account-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>

            <div class="account-middle">
                <a class="account-links" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
">Adrese</a> <br />
                <a class="account-links" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
">Comenzi</a> <br />
                <a class="account-links" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">Informatii personale</a>
            </div>

            <div class="account-bottom">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">Contul meu</a>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['actions']['logout'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">Deconectare</a>
            </div>
        <?php } else { ?>
            <div class="account-top login-buttons">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
">Autentificare</a>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
">Inregistrare</a>
            </div>
        <?php }?>
    </div>
</div>


<!-- end C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_customersignin/ps_customersignin.tpl --><?php }} ?>
