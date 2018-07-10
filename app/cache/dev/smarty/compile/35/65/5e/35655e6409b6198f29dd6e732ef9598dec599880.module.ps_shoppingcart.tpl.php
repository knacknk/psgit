<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 14:19:53
         compiled from "module:ps_shoppingcart/ps_shoppingcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16376168195b44965998b927-49981279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcart/ps_shoppingcart.tpl',
      1 => 1531217390,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '16376168195b44965998b927-49981279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart_url' => 0,
    'refresh_url' => 0,
    'cart' => 0,
    'product' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b449659aa8a76_38071922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b449659aa8a76_38071922')) {function content_5b449659aa8a76_38071922($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><div id="shoppingcart">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="cart-icon"></span></a>
    <div class="blockcart cart-preview hidden-md-down" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="header">
            <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" data-target="#cosul-meu" class="cart-info">
                <span class="hidden-md-down">Cosul meu</span> <br />
                <span class="cart_total hidden-md-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
                <span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
            </a>

        </div>
    </div>
    <span class="down-arrow hidden-md-down"></span>


    <div style="" class="collapse cart-expanded hidden-md-down" id="cart-expanded">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
            
            <div class="cart-top">
                
                    <div data-simplebar>
                        <ul class="product-line-list">
                            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                
                                <li class="product-line">
                                    <div class="product-line-image">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                                        <?php } else { ?>
                                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                                        <?php }?>
                                    </div>
                                    <div class="product-line-name">
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                                    </div>
                                    <div class="product-line-qty-price">
                                        <span class="qty-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <span class="qty-price-total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="nano-pane" style="display:block!important;"><div class="nano-slider" style="height: 20px; transform: translate(0px, 0px);"></div></div>

                    </div>
                
            </div>
            


            <div class="cart-bottom">
                
                <div class="cart-summary-line cart-total">
                    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>

                <div class="cart-summary-line">
                    <span class="label sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                

                
                <div>
                    <div class="text-sm-center">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">Detalii cos</a>
                    </div>
                </div>
                
            </div>
        <?php } else { ?>
            <div class="cart-top">
                <span class="no-products">Nu exista produse in cos.</span>
            </div>
        <?php }?>



    </div>


</div><!-- end C:\xampp\htdocs\psgit\psgit/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><?php }} ?>
