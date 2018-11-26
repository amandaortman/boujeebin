$(document).ready(function() {


    $( ".deleteProduct" ).click(function() {
        //alert('ok');
        var itemID = $(this).attr("data-id");
       // alert(itemID);

    $.ajax({
        type:'POST',
        url:'delete_items.php',
        dataType:'text',
        data: {
            itemID : itemID
        },
        success:function(data) {
           // alert(data);
            $('#desktopCart').load(document.URL +  ' #desktopCart');
            $('#cart_checkout_div').load(document.URL +  ' #cart_checkout_div');
        }
    });
});


    
    $( ".addToCart" ).click(function() {
            //alert('ok');
            var itemID = $(this).attr("data-id");
           // alert(itemID);

        $.ajax({
            type:'POST',
            url:'stored_cart.php',
            dataType:'text',
            data: {
                itemID : itemID
            },
            success:function(data) {
            //    alert(data);
                $('#desktopCart').load(document.URL +  ' #desktopCart');
            }
        });

    });

    $( ".addToCartSingle" ).click(function() {
        //alert('ok');
        var itemID = $(this).attr("data-id");
       // alert(itemID);

    $.ajax({
        type:'POST',
        url:'stored_cart.php',
        dataType:'text',
        data: {
            itemID : itemID
        },
        success:function(data) {
            //alert(data);
            $('#desktopCart').load(document.URL +  ' #desktopCart');
        }
    });

});    



});