jQuery(document).ready( function ($) {
    $( ".addon_search_product" ).focusout(function() {
        var product_id = $(this).find('input').val();
        jQuery.ajax({
            type : "post",
            url : myAjax.ajaxurl,
            data : {action: "search_item_id", product_id : product_id},
            success: function(response) {
              console.log(response);
              $.each(JSON.parse(response), function(val, text) {
                $( '.variable_dependencies' ).find('select').append( $('<option></option>').val(val).html(text) );
              });
            }
         })   
    });
} );