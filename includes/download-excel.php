<?php

function download_history_page_callback($order_id) {    
    ?>
        <h1>
            <?php esc_html_e( 'Download History', 'my-plugin-textdomain' ); ?>
        </h1>
        <br><br>
        <input type="checkbox" class="supplier" name="Kok" value="Kok"> Kok
        <input type="checkbox" class="supplier" name="Mauer" value="Mauer"> Mauer
        <input type="checkbox" class="supplier" name="tenlushccer" value="Ten Hulscher"> Ten Hulscher
        <input type="checkbox" class="supplier" name="Artitec" value="Artitec"> Artitec
        <br><br>
        <div class="clon-area"></div>

        <table class="table table-bordered" id="excel_table">
            <thead>
                <tr>
                <th>Item ID</th>
                <th>Supplier</th>
                <th>EAN</th>
                <th>Qty</th>
                <th>Supplier Article Number</th>
                <th>Manufacturer Article Number</th>
                <th>Title</th>
                <th>Reference</th>
                <th>Given Delivery Date</th>
                <th class="noExl">Export Date</th>

                </tr>
            </thead>
            <?
            $args = array(
                'status' => array('wc-processing', 'wc-on-hold' ,'wc-completed'),
            );
            $orders = wc_get_orders($args);
            echo "<tbody>";
            
            if (!empty($orders)) {

            foreach ($orders as $order) {
                $order_id = $order->get_id();
                foreach ($order->get_items() as $item_id => $item ) {
                    if (!empty($item->get_meta('printed_date'))) {
                    $product_id = $item->get_product_id();
                    $product = $item->get_product();
                    $product_name = $item->get_name();
                    $quantity = $item->get_quantity();
                    $supplier = get_post_meta($product_id , 'supplier', true);
                    $manufac_number =  get_post_meta($product_id , 'factoryarticlenumbe', true);
                    $supplier_article_number = get_post_meta($product_id , 'supplierarticlenumber', true);
                    $sku = $product->get_sku();
                    $download = $item->get_meta('downloaded');
                    $printed_date = $item->get_meta('printed_date');
                    $download = boolval($download) ? 1 : 0;
                    
                    echo "<tr>";   
                    echo "<td>". $item_id ."</td>";
                    echo "<td>". $supplier ."</td>";
                    echo "<td> ". $sku ." </td>";
                    echo "<td>".$quantity."</td>";
                    echo "<td>".$supplier_article_number."</td>";
                    echo "<td>".$manufac_number."</td>";
                    echo "<td>".$product_name."</td>";
                    echo "<td> ". $order_id . "</td>";
                    echo "<td> non </td>";
                    echo "<td class='noExl'>".$printed_date."</td>";

                    echo "</tr>";
                    }
                }
               }
            }
            echo "</tbody>";    
            echo "</table>";
 }



