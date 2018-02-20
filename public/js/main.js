$(document).ready(function () {
    // $('.owl-carousel').owlCarousel();

    var ads = $("#ads-carousel");
    ads.owlCarousel({
        items: 3,
        nav: false
    });

    var newArrival = $("#new-arrival");
    newArrival.owlCarousel({
        items: 5,
        nav: true,
        dots: false,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [980, 4],
        itemsTablet: [768, 3],
        itemsTabletSmall: false,
        itemsMobile: [479, 1]
    });

    // show add item button on each product
    // $(".store-new-arrival .card").hover(function () {
    //     $(this).find(".item-add-btn").fadeIn();
    //     }
    //     , function () {
    //         $(this).find(".item-add-btn").fadeOut();
    // });

    // $(".store-new-arrival .owl-carousel").hover(function (){
    //     $(this).find(".owl-prev").css('opacity', '1');
    //     $(this).find(".owl-next").css('opacity', '1');
    // }, function (){
    //     $(this).find(".owl-prev").css('opacity', '0');
    //     $(this).find(".owl-next").css('opacity', '0');
    // });



    var featuredProducts = $("#featured-products");
    featuredProducts.owlCarousel({
        items: 5,
        nav: true,
        dots: false,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [980, 4],
        itemsTablet: [768, 3],
        itemsTabletSmall: false,
        itemsMobile: [479, 1]
    });

    $(".card").hover(function () {
        $(this).find(".item-add-btn").fadeIn();
    }
        , function () {
            $(this).find(".item-add-btn").fadeOut();
        });

    $(".owl-carousel").hover(function () {
        $(this).find(".owl-prev").css('opacity', '1');
        $(this).find(".owl-next").css('opacity', '1');
    }, function () {
        $(this).find(".owl-prev").css('opacity', '0');
        $(this).find(".owl-next").css('opacity', '0');
    });


});
