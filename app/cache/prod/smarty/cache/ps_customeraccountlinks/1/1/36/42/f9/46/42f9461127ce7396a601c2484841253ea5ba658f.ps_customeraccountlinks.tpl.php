<?php /*%%SmartyHeaderCode:10491856875b36064d8a5ef5-79637164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1530267020,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '10491856875b36064d8a5ef5-79637164',
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b36064d8b5ac3_20870696',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b36064d8b5ac3_20870696')) {function content_5b36064d8b5ac3_20870696($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/psgit/psgit/contul-meu" rel="nofollow">
      Your account
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/psgit/psgit/identitate" title="Informatii personale" rel="nofollow">
            Informatii personale
          </a>
        </li>
            <li>
          <a href="http://localhost/psgit/psgit/istoric-comenzi" title="Comenzi" rel="nofollow">
            Comenzi
          </a>
        </li>
            <li>
          <a href="http://localhost/psgit/psgit/nota-credit" title="Note de credit" rel="nofollow">
            Note de credit
          </a>
        </li>
            <li>
          <a href="http://localhost/psgit/psgit/adrese" title="Adrese" rel="nofollow">
            Adrese
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
