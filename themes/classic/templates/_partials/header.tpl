{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <nav class="header-nav hidden-sm-down">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-5 left-nav">
            {hook h='displayNav1'}
          </div>
          <div class="col-md-7 right-nav">
            {hook h='displayNav2'}
          </div>
        </div>
      </div>
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="header-top" id="myHeader">
    <div class="container">
      <div class="row header-flex">

        <div class="col-md-1 col-xs-1 text-xs-center mobile trigger-menu hidden-lg-up">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>

          <div class="clearfix"></div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-5" id="logo">
          <a href="{$urls.base_url}">
            <img class="logo img-fluid" src="{$shop.logo}" alt="{$shop.name}">
          </a>
        </div>

        <div class="col-lg-10 col-md-8 col-sm-5 col-xs-6 position-static">
          {hook h='displayTop'}
          <div class="search modal-search" tabindex="-1" role="dialog" id="mobilesearch">
            <div class="modal-dialog-search" role="document">
              <div class="modal-content-search">
                <div class="modal-content-search">
                  <div class="modal-body-search clearfix">
                    {hook h='displaySearch'}
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="float-xs-right hidden-md-up" id="_mobile_search_trigger"><i class="fas fa-search" data-toggle="modal" data-target="#mobilesearch" >s</i></div>
          <div class="clearfix"></div>
        </div>
      </div>


      {*<div class="modal hidden-md-up" tabindex="-1" role="dialog" id="mobilesearch">*}
        {*<div class="modal-dialog" role="document">*}
          {*<div class="modal-content">*}
            {*<div class="modal-body clearfix">*}
              {*{hook h='displaySearch'}*}
            {*</div>*}
          {*</div>*}
        {*</div>*}
      {*</div>*}

    </div>
  </div>
  {hook h='displayNavFullWidth'}
{/block}

{block name='header_menu'}
  <div class="header-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          {hook h='displayNav'}
        </div>
      </div>
    </div>
  </div>
{/block}
