import $ from 'jquery';
import DropDown from './drop-down';

export default class TopMenu extends DropDown {

}

<<<<<<< HEAD
if ($('#sec_desktop_top_menu').is(":visible")) {
=======
if ($('#_desktop_top_menu').is(":visible")) {
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed
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
<<<<<<< HEAD

} else {
  $('#menu-icon').on('click', function() {
    $('#sec_desktop_top_menu').toggle();
=======
}else {
  $('#menu-icon').on('click', function() {
    $('#mobile_top_menu_wrapper').toggle();
    $('.top-menu[data-depth=0] > .navbar-toggler').css('display', 'none');
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed
  });

}

<<<<<<< HEAD
//New menu
if ( $(window).width() > 992) {
  var header = document.getElementById("myHeader");

  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 290) {
      header.classList.add("sticky-minimized");
      $('#wrapper').css('padding-top', '140px');
    } else {
      header.classList.remove("sticky-minimized");
      $('.sub-menu').removeClass('shown-menu');
      $('#wrapper').css('padding-top', '24px');
    }

    if (y > 300) {
      var position = $('#menu-icon').offset();
      header.classList.add("sticky");
      $('.trigger-menu').removeClass('hidden-lg-up');
      $('.trigger-menu').hover(function(){
        $('.sub-menu').addClass('shown-menu');
        $('.shown-menu').css('left', position.left);

      }, function(){
        $(".menu").trigger('mouseenter');

        if($('.menu').mouseleave) {
          $(".menu").mouseleave(function () {
            setTimeout(function () {
              $('.sub-menu').removeClass('shown-menu');
            }, 300);
          });
        }
      });

    } else {
      header.classList.remove("sticky");
      $('.sub-menu').css('left', '0');
      $('.trigger-menu').addClass('hidden-lg-up');
    }
  });

}
=======


>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed
