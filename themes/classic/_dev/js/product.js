/**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
import $ from 'jquery';

$(document).ready(function () {

  createProductSpin();
  createInputFile();
  coverImage();
  // imageScrollBox();

  prestashop.on('updatedProduct', function (event) {
    imageSliders();
    createInputFile();
    coverImage();
    if (event && event.product_minimal_quantity) {
      const minimalProductQuantity = parseInt(event.product_minimal_quantity, 10);
      const quantityInputSelector = '#quantity_wanted';
      let quantityInput = $(quantityInputSelector);

      // @see http://www.virtuosoft.eu/code/bootstrap-touchspin/ about Bootstrap TouchSpin
      quantityInput.trigger('touchspin.updatesettings', {min: minimalProductQuantity});
    }
    // imageScrollBox();
    $($('.tabs .nav-link.active').attr('href')).addClass('active').removeClass('fade');
    $('.js-product-images-modal').replaceWith(event.product_images_modal);
  });

  function coverImage() {
    $('.js-thumb').on(
        'click',
        (event) => {
          $('.js-modal-product-cover').attr('src',$(event.target).data('image-large-src'));
          $('.selected').removeClass('selected');
          $(event.target).addClass('selected');
          $('.js-qv-product-cover').prop('src', $(event.currentTarget).data('image-large-src'));
        }
    );
  }

  // function imageScrollBox()
  // {
  //   if ($('#main .js-qv-product-images li').length > 2) {
  //     $('#main .js-qv-mask').addClass('scroll');
  //     $('.scroll-box-arrows').addClass('scroll');
  //       $('#main .js-qv-mask').scrollbox({
  //         distance: 113,
  //         autoPlay: false
  //       });
  //       $('.scroll-box-arrows .left').click(function () {
  //         $('#main .js-qv-mask').trigger('backward');
  //       });
  //       $('.scroll-box-arrows .right').click(function () {
  //         $('#main .js-qv-mask').trigger('forward');
  //       });
  //   } else {
  //     $('#main .js-qv-mask').removeClass('scroll');
  //     $('.scroll-box-arrows').removeClass('scroll');
  //   }
  // }

  function createInputFile()
  {
    $('.js-file-input').on('change', (event) => {
      let target, file;

      if ((target = $(event.currentTarget)[0]) && (file = target.files[0])) {
        $(target).prev().text(file.name);
      }
    });
  }

  function createProductSpin()
  {
    let quantityInput = $('#quantity_wanted');
    quantityInput.TouchSpin({
      buttondown_class: 'btn btn-down',
      buttonup_class: 'btn btn-up',
      buttondown_txt: '<i class="fas fa-minus"></i>',
      buttonup_txt: '<i class="fas fa-plus"></i>',
      min: parseInt(quantityInput.attr('min'), 10),
      max: 1000000
    });

    var quantity = quantityInput.val();
    quantityInput.on('keyup change', function (event) {
      const newQuantity = $(this).val();
      if (newQuantity !== quantity) {
        quantity = newQuantity;
        let $productRefresh = $('.product-refresh');
        $(event.currentTarget).trigger('touchspin.stopspin');
        $productRefresh.trigger('click', {eventType: 'updatedProductQuantity'});
      }
      event.preventDefault();

      return false;
    });
  }
});

// function imageSliders () {
//   $(document).ready(function(){
//     $('.slider-nav').slick({
//       infinite: false,
//       slidesToShow: 3,
//       slidesToScroll: 1,
//       asNavFor: '.slider-for',
//       focusOnSelect: true,
//       arrows: true,
//       vertical: true,
//       responsive: [
//         {
//           breakpoint: 992,
//           settings: {
//             slidesToShow: 3,
//             infinite: false,
//             draggable: true,
//             vertical: false,
//             arrows: false,
//           }
//         },
//         {
//           breakpoint: 767,
//           settings: {
//             slidesToShow: 4,
//             infinite: true,
//             draggable: true,
//           }
//         },
//         {
//           breakpoint: 480,
//           settings: {
//             slidesToShow: 1,
//             draggable: true,
//           }
//         }
//       ]
//     });
//     $('.slider-for').slick({
//       infinite: false,
//       fade: true,
//       speed: 300,
//       slidesToShow: 1,
//       slidesToScroll: 1,
//       arrows: false,
//       draggable: false,
//       responsive: [
//         {
//           breakpoint: 992,
//           settings: {
//             slidesToShow: 1,
//             infinite: false,
//             draggable: true,
//             vertical: false,
//             arrows: false,
//             dots: true,
//             fade: false,
//           }
//         }
//       ]
//     });
//   });
// }
