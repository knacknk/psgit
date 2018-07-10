/* global $ */
$(document).ready(function () {
    var $searchWidget = $('#sec_search_widget');
    var $searchBox    = $searchWidget.find('input[type=text]');
    var searchURL     = $searchWidget.attr('data-search-controller-url');
    var searchscroller = null;

    $.widget('prestashop.psBlockSearchAutocomplete', $.ui.autocomplete, {
        _renderItem: function (ul, product) {
            var productcover = product.cover;

            if (productcover == undefined) var imgsrc = 'img/p/ro-default-home_default.jpg'; else var imgsrc = productcover.small.url;
            if (product.regular_price != '')  {
                var priceclass = 'no-reduction';
                $('.old-price').hide();
            }
            else var priceclass = '';

            var search_result = $("<li class='clearfix'></li>")
                .append('<a href="' + product.url + '" title="' + product.name + '" class="product-image"><img src="' + imgsrc + '"></a>' +
                    '<div class="product-info">' +
                    '<a href="' + product.url + '" title="' + product.name + '">' + product.name + '</a>' +
                    '<span class="old-price">' + product.regular_price + '</span>' +
                    '<span class="price ' + priceclass + '">' + product.price + '</span>' +
                    // '<span class="reference">' + product.reference + '</span>' +
                    '</div>')
                .appendTo(ul);
            $('.searchresult .nano-pane').show();
            return search_result;
        }
    });

    $searchBox.psBlockSearchAutocomplete({
        source: function (query, response) {
            $('.spinner').show();
            $.post(searchURL, {
                s: query.term,
                resultsPerPage: 10
            }, null, 'json')
                .then(function (resp) {
                    response(resp.products);

                    if ((resp.products).length == '') {
                        removeborderandscroll();
                    }
                    if ((resp.products).length == '1') {
                        $('.searchresult').css('height', '135px');
                    }
                    if ((resp.products).length == 2) {
                        $('.searchresult').css('height', '245px');
                    }
                    if ((resp.products).length > 2) {
                        $('.searchresult').css('height', '360px');
                    }
                })
                .fail(response);
        },
        minLength: 3,
        appendTo: $searchWidget,
        open: function () {
            $('.spinner').hide();
            $('#ui-id-1').removeAttr("style");
            if (searchscroller == null) {
                $('.ui-autocomplete').addClass('nano-content').wrap('<div class="searchresult-wrap"><div class="nano searchresult clearfix"/>');
                searchscroller = $(".searchresult").nanoScroller({ scroll: 'top' });
            }
        },
        select: function (event, ui) {
            var url = ui.item.url;
            window.location.href = url;
            removeborderandscroll();
        },
    });

    function removeborderandscroll() {
        $(".searchresult").nanoScroller({ scroll: 'top' });
        $('.nano-pane').hide();
    }

    $('#sec_search_widget').on('focusout', $searchWidget, function (ev) {
        removeborderandscroll();

    });


    $('#sec_search_widget').on('keydown', $searchWidget, function (ev) {
        removeborderandscroll();
    });


});

