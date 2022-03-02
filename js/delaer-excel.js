
jQuery(document).ready( function ($) {
        var table = $('#excel_table').DataTable();
         $("#download_excel").click(function(){
            // $("#excel_table").table2excel({
            //   // exclude CSS class
            //   exclude: ".noExl",
            //   name: "Worksheet Name",
            //   filename: "SomeFile", //do not include extension
            //   fileext: ".xls" // file extension
            // }); 
            var downloading_ids = [];
            table.rows({page:'current'}).data().map((row) => {
              downloading_ids.push(row[1]);
              console.log(downloading_ids);
            });
            jQuery.ajax({
              type : "post",
              url : myAjax.ajaxurl,
              data : {action: "add_order_item_meta", id_list : downloading_ids},
              success: function(response) {
                console.log(response);
              }
           })   
        });
  
        $('.supplier').on('click', function() {
          var query = '';
          $('.supplier:checked').each(function(e) {
            if (query == '') {
              query =  $(this).val() 
            } else {
              query = query + '|' + $(this).val() 
            }
            
          }); 
          table.column(2).search(query, true, false ).draw();
        });   
} );

