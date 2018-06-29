import $ from 'jquery';
import DropDown from './drop-down';

export default class TopMenu extends DropDown {

}

if ($('#_desktop_top_menu').is(":visible")) {
  $('.top-menu[data-depth=0] li > .sub-menu').parent().hover(function () {
    var submenu = $(this).children('.sub-menu');
    if ($(submenu).is(':hidden')) {
      $(submenu).show();
    } else {
      $(submenu).hide();
    }
  });

  $('.top-menu[data-depth=1] li > .sub-menu2').parent().hover(function () {
    var submenu2 = $(this).children('.sub-menu2');
    if ($(submenu2).is(':hidden')) {
      $(submenu2).show();
    } else {
      $(submenu2).hide();
    }
  });
}else {
  $('#menu-icon').on('click', function() {
    $('#mobile_top_menu_wrapper').toggle();
    $('.top-menu[data-depth=0] > .navbar-toggler').css('display', 'none');
  });

}



