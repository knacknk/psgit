if ( $(window).width() > 992) {
    $("#shoppingcart").hover(
        function () {
            $('#cart-expanded').show();
            $('#account-expanded').hide();
            $('#favorites-expanded').hide();
        }, function () {
            $("#cart-expanded").trigger('mouseenter');

            if($('#shoppingcart').mouseleave) {
                $("#cart-expanded").mouseleave(function () {
                    setTimeout(function () {
                        $('#cart-expanded').hide();
                    }, 300);
                });
            }
        }
    );

    $("#account").hover(
        function () {
            $('#account-expanded').show();
            $('#cart-expanded').hide();
            $('#favorites-expanded').hide();
        }, function () {
            if($('#account').mouseleave && $('#account-expanded').is(':visible')) {
                $("#account-expanded").mouseleave(function () {
                    setTimeout(function () {
                        $('#account-expanded').hide();
                    }, 300);
                });
            }
        }
    );

    $("#favorites").hover(
        function () {
            $('#favorites-expanded').show();
            $('#cart-expanded').hide();
            $('#account-expanded').hide();
        }, function () {
            if($('#favorites').mouseleave && $('#favorites-expanded').is(':visible')) {
                $("#favorites-expanded").mouseleave(function () {
                    setTimeout(function () {
                        $('#favorites-expanded').hide();
                    }, 300);
                });
            }
        }
    );
}

/*Ladda*/
define(['ladda'], function (Ladda) {
    Ladda.bind('.ladda-button', {timeout: 2000});
    Ladda.bind('.order-button', {timeout: 4500});
    Ladda.bind('.add-to-cart', {timeout: 2000});
});
/*End Ladda*/

$(document).on('click','.gototop', function(event) {
    event.preventDefault();
    var target = "#" + this.getAttribute('data-target');
    $('html, body').animate({
        scrollTop: $(target).offset().top
    }, 1000);
});


$('.comments_note').click(function (e) {
    e.preventDefault();
    $('.review_tab').tab('show');

    var target = "#" + this.getAttribute('data-target');
    $('html, body').stop().animate({
        scrollTop: $(target).offset().top
    }, 1000);
});


$(document).ready(function(){
    nbProducts();

    prestashop.on('updateProductList', function (event) {
        nbProducts();
    });
});

function nbProducts() {
    if(window.location.href.indexOf("resultsPerPage=16") > -1) {
        $('.nb-16').prop('selected', 'true');
    }
    if(window.location.href.indexOf("resultsPerPage=32") > -1) {
        $('.nb-32').prop('selected', 'true');
    }
    if(window.location.href.indexOf("resultsPerPage=48") > -1) {
        $('.nb-48').prop('selected', 'true');
    }
}

$(document).ready(function(){
    $(document).on("change", '#nb-products', function (e) {
        if (window.location.href.indexOf("resultsPerPage=16") > -1) {
            window.location.href = window.location.href.replace("resultsPerPage=16", "resultsPerPage=" + $("#nb-products ").val());

        } else if (window.location.href.indexOf("resultsPerPage=32") > -1) {
            window.location.href = window.location.href.replace("resultsPerPage=32", "resultsPerPage=" + $("#nb-products ").val());

        } else if (window.location.href.indexOf("resultsPerPage=48") > -1) {
            window.location.href = window.location.href.replace("resultsPerPage=48", "resultsPerPage=" + $("#nb-products ").val());
        }
        else if (window.location.href.indexOf("order=") > -1) {
            window.location.href += "&resultsPerPage=" + $("#nb-products ").val();
        }
        else if (window.location.href.indexOf("s=") > -1) {
            window.location.href += "&resultsPerPage=" + $("#nb-products ").val();
        }
        else {
            window.location.href += "?resultsPerPage=" + $("#nb-products ").val();
        }
    });
});

<<<<<<< HEAD
// $(document).ready(function(){
//     $('.slider-nav').slick({
//         infinite: false,
//         slidesToShow: 3,
//         slidesToScroll: 1,
//         asNavFor: '.slider-for',
//         focusOnSelect: true,
//         arrows: true,
//         vertical: true,
//         responsive: [
//             {
//                 breakpoint: 992,
//                 settings: {
//                     slidesToShow: 3,
//                     infinite: false,
//                     draggable: true,
//                     vertical: false,
//                     arrows: false,
//                 }
//             },
//             {
//                 breakpoint: 767,
//                 settings: {
//                     slidesToShow: 4,
//                     infinite: true,
//                     draggable: true,
//                 }
//             },
//             {
//                 breakpoint: 480,
//                 settings: {
//                     slidesToShow: 1,
//                     draggable: true,
//                 }
//             }
//         ]
//     });
//
//     $('.slider-for').slick({
//         infinite: false,
//         fade: true,
//         speed: 300,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         arrows: false,
//         draggable: false,
//         responsive: [
//             {
//                 breakpoint: 992,
//                 settings: {
//                     slidesToShow: 1,
//                     infinite: false,
//                     draggable: true,
//                     vertical: false,
//                     arrows: false,
//                     dots: true,
//                     fade: false,
//                 }
//             }
//         ]
//     });
//     // $('.images-container').fadeIn('slow');
// });
//
//
// $(document).ready(function () {
//
//     $('.similar-slick').slick({
//         infinite: false,
//         slidesToShow: 5,
//         swipeToSlide: true,
//         arrows: true,
//         variableWidth: true,
//         buttons: false,
//         draggable: false,
//         responsive: [
//             {
//                 breakpoint: 992,
//                 settings: {
//                     slidesToShow: 4,
//                     infinite: true,
//                     draggable: true,
//                 }
//             },
//             {
//                 breakpoint: 767,
//                 settings: {
//                     slidesToShow: 4,
//                     infinite: true,
//                     draggable: true,
//                 }
//             },
//             {
//                 breakpoint: 480,
//                 settings: {
//                     slidesToShow: 1,
//                     draggable: true,
//                 }
//             }
//         ]
//     });
//     $('.similar-products').fadeIn( "slow" );
//
//     $('.product-accessories-slick').slick({
//         infinite: false,
//         slidesToShow: 5,
//         swipeToSlide: true,
//         arrows: true,
//         variableWidth: true,
//         buttons: false,
//         draggable: false,
//         responsive: [
//             {
//                 breakpoint: 992,
//                 settings: {
//                     slidesToShow: 4,
//                     infinite: true,
//                     draggable: true,
//                 }
//             },
//             {
//                 breakpoint: 767,
//                 settings: {
//                     slidesToShow: 4,
//                     infinite: true,
//                     draggable: true,
//                 }
//             },
//             {
//                 breakpoint: 480,
//                 settings: {
//                     slidesToShow: 1,
//                     draggable: true,
//                 }
//             }
//         ]
//     });
//     $('.product-accessories').fadeIn( "slow" );
// });
=======
$(document).ready(function(){
    $('.slider-nav').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        focusOnSelect: true,
        arrows: true,
        vertical: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    infinite: false,
                    draggable: true,
                    vertical: false,
                    arrows: false,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                    draggable: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    draggable: true,
                }
            }
        ]
    });

    $('.slider-for').slick({
        infinite: false,
        fade: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    infinite: false,
                    draggable: true,
                    vertical: false,
                    arrows: false,
                    dots: true,
                    fade: false,
                }
            }
        ]
    });
    // $('.images-container').fadeIn('slow');
});


$(document).ready(function () {

    $('.similar-slick').slick({
        infinite: false,
        slidesToShow: 5,
        swipeToSlide: true,
        arrows: true,
        variableWidth: true,
        buttons: false,
        draggable: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                    draggable: true,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                    draggable: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    draggable: true,
                }
            }
        ]
    });
    $('.similar-products').fadeIn( "slow" );

    $('.product-accessories-slick').slick({
        infinite: false,
        slidesToShow: 5,
        swipeToSlide: true,
        arrows: true,
        variableWidth: true,
        buttons: false,
        draggable: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                    draggable: true,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                    draggable: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    draggable: true,
                }
            }
        ]
    });
    $('.product-accessories').fadeIn( "slow" );
});
>>>>>>> 4c5a93e41274542815cddfde929d4572115e1fed

$('#mobilesearch').on('shown.bs.modal', function () {
    $('input[name=s]').trigger('focus')
});