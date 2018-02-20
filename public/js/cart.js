$(document).ready(function () {
 
    $('div.item-add-btn > div.add-btn > button').click(function() {
        
        var product = $(this).attr('id');
        
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
        axios.post('/products/' + product + '/add_to_cart', {})
        .then(function (response) {

            console.log(response.data);
            
            $('table.shoping-cart-table tbody').append(
                "<tr id='side-cart-product-" + response.data.id + "'>" +
                    "<td width='90' > " +
                        "<div class='cart-product-imitation'>" +
                            "<img src='" + response.data.image + "' alt='image' width='80px'>" +
                        "</div>" +
                    "</td >" +
                    "<td class='desc'>" +
                        "<h3><a href='#' class='text-navy'>" + response.data.name + "</a></h3>" +
                        "<div class='m-t-sm'>" +
                            "<a href='#' class='text-muted'><i class='fa fa-edit'></i> instructions</a> " +
                            "<a href='#' class='text-muted'><i class='fa fa-trash'></i> Remove</a>" +
                        "</div>" +
                    "</td>" +
                    "<td width='65'>" +
                        "<input name='qty' type='text' class='form-control' value='" + response.data.qty + "' id='side-item-cart-qty-" + response.data.id + "'>" +
                    "</td>" +
                    "<td>" + response.data.price + "</td>" +
                "</tr>"
            );

            if($('.cart-qty-badge').length > 0){
                $('.cart-qty-badge').html(response.data.totalItems);
            }else{
                $('button#trigger-cart').append('<span class="cart-qty-badge">' + response.data.totalItems + '</span>')
            }
            
            $('span#total-items-in-cart > strong').html(response.data.totalItems);
            $('input#side-item-cart-qty-' + response.data.id).val(response.data.qty);
            $('span.cart-total').html(response.data.total);
        })
        .catch(function (error) {
            console.log(error);
        });
        
    });


    $('img.item-img, .product-name').click(function () {

        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        var product = $(this).closest('div.product-details').attr('id');

        alert(product);
        $("#modal-product-price").html('$10'); 
        $("#modal-product-name").html('Some product name'); 
        $("#modal-product-description").html("hskhdskjfhdskfjhskfdf");
        // var image_url
        
        axios.post('/products/' + product + '/details', {})
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        
     });
    
    $('div.item-add-btn > div.favourite').click(function () {
       alert("favouriting"); 
    });

    function updateCartCount(params) {
        
    }

    function updateCartList(params) {
        
    }

    function updateCartItem(params) {
        
    }

});