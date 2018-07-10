<div id="account">
    <a href="{$my_account_url}"><span class="account-icon"></span></a>
    <div class="account-info hidden-md-down">
        {if $logged}
            <a
                    href="{$my_account_url}"
                    title="Contul meu"
                    rel="nofollow"
            >
                <span class="hidden-md-down">Contul meu</span>
            </a>
        {else}
            <a
                    href="{$my_account_url}"
                    title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}"
                    rel="nofollow"
            >
                <span class="hidden-md-down">Contul meu</span>
            </a>
        {/if}
    </div>
    <span class="down-arrow hidden-md-down"></span>

    <div class="collapse" id="account-expanded">
        {if $customer.is_logged }
            <div class="account-top">
                <span class="account-name">{$customer.firstname} {$customer.lastname}</span>
            </div>

            <div class="account-middle">
                <a class="account-links" href="{$urls.pages.addresses}">Adrese</a> <br />
                <a class="account-links" href="{$urls.pages.history}">Comenzi</a> <br />
                <a class="account-links" href="{$urls.pages.identity}">Informatii personale</a>
            </div>

            <div class="account-bottom">
                <a href="{$urls.pages.my_account}" class="btn btn-primary">Contul meu</a>
                <a href="{$urls.actions.logout}" class="btn btn-primary">Deconectare</a>
            </div>
        {else}
            <div class="account-top login-buttons">
                <a href="{$my_account_url}">Autentificare</a>
                <a href="{$urls.pages.register}">Inregistrare</a>
            </div>
        {/if}
    </div>
</div>


