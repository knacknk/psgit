import $ from 'jquery';
import DropDown from './drop-down';

export default class TopMenu extends DropDown {

}

$(document).ready(function () {

  $('.top-menu[data-depth=0] li > .sub-menu').parent().hover(function () {
    var submenu = $(this).children('.sub-menu');
    if ($(submenu).is(':hidden')) {
      $(submenu).show();
    } else {
      $(submenu).hide();
    }
  });

  $('.top-menu[data-depth=1] li > .sub-menu2').parent().hover(function(){
    var submenu2 = $(this).children('.sub-menu2');
    $(submenu2).show();
  }, function(){
    var submenu2 = $(this).children('.sub-menu2');
    $(submenu2).hide();
  });

  $('#menu-icon').on('click', function () {
    $('#mobile_top_menu_wrapper').toggle();
    $('.top-menu[data-depth=0] > .navbar-toggler').css('display', 'none');
  });

});


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