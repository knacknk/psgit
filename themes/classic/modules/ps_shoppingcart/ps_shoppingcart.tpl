<div id="shoppingcart">
    <a href="{$cart_url}"><span class="cart-icon"></span></a>
    <div class="blockcart cart-preview hidden-md-down" data-refresh-url="{$refresh_url}">
        <div class="header">
            <a rel="nofollow" href="{$cart_url}" data-target="#cosul-meu" class="cart-info">
                <span class="hidden-md-down">Cosul meu</span> <br />
                <span class="cart_total hidden-md-down">{$cart.totals.total_including_tax.value}</span>
                <span class="cart-products-count">{$cart.products_count}</span>
            </a>

        </div>
    </div>
    <span class="down-arrow hidden-md-down"></span>


    <div style="" class="collapse cart-expanded hidden-md-down" id="cart-expanded">
        {if $cart.products_count > 0}
            {*DETALLII PRODUSE*}
            <div class="cart-top">
                {block name='cart_summary_product_list'}
                    <div data-simplebar>
                        <ul class="product-line-list">
                            {foreach from=$cart.products item=product}
                                {*<pre>{$product|var_dump}</pre>*}
                                <li class="product-line">
                                    <div class="product-line-image">
                                        {if $product.cover}
                                            <img src="{$product.cover.small.url}" alt="{$product.name}">
                                        {else}
                                            <img src="{$urls.no_picture_image.bySize.small_default.url}" alt="{$product.name}">
                                        {/if}
                                    </div>
                                    <div class="product-line-name">
                                        <a href="{$product.url}">{$product.name}</a>
                                    </div>
                                    <div class="product-line-qty-price">
                                        <span class="qty-price">{$product.quantity} x {$product.price}</span>
                                        <span class="qty-price-total">{$product.total}</span>
                                    </div>
                                </li>
                            {/foreach}
                        </ul>
                        <div class="nano-pane" style="display:block!important;"><div class="nano-slider" style="height: 20px; transform: translate(0px, 0px);"></div></div>

                    </div>
                {/block}
            </div>
            {*END DETALLII PRODUSE*}


            <div class="cart-bottom">
                {*PRET FINAL & TAXE*}
                <div class="cart-summary-line cart-total">
                    <span class="label">{$cart.totals.total.label} {$cart.labels.tax_short}</span>
                    <span class="value">{$cart.totals.total.value}</span>
                </div>

                <div class="cart-summary-line">
                    <span class="label sub">{$cart.subtotals.tax.label}</span>
                    <span class="value sub">{$cart.subtotals.tax.value}</span>
                </div>
                {*END PRET FINAL & TAXE*}

                {*VEZI COS & FINALIZEAZA COMANDA*}
                <div>
                    <div class="text-sm-center">
                        <a href="{$cart_url}" class="btn btn-primary">Detalii cos</a>
                    </div>
                </div>
                {*END VEZI COS & FINALIZEAZA COMANDA*}
            </div>
        {else}
            <div class="cart-top">
                <span class="no-products">Nu exista produse in cos.</span>
            </div>
        {/if}



    </div>


</div>