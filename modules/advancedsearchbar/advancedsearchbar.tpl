<div id="sec_search_widget" data-search-controller-url="{$search_controller_url}">
	<form method="get" action="{$search_controller_url}">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="" placeholder="cauta dupa cod produs sau denumire...">
		<div class="spinner hidden-md-up"><img src="{$urls.theme_assets}img/ajax-loader.gif"/></div>
		<button type="submit"><i class="fas fa-search"></i> <span class="hidden-sm-down">cauta</span></button>
	</form>
</div>
