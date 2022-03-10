<?php

function my_delaer_excel_contents($order_id) {    
    ?>
        <h1>
            <?php esc_html_e( 'Dealer Excel Reports', 'my-plugin-textdomain' ); ?>
        </h1>
        <button id="download_excel">Export Final</button> <br> <br>
        <button id="download_draft">Export Draft</button> <br> <br>

        <input type="checkbox" class="supplier" name="Kok" value="Kok"> Kok
        <input type="checkbox" class="supplier" name="Mauer" value="Mauer"> Mauer
        <input type="checkbox" class="supplier" name="tenlushccer" value="Ten Hulscher"> Ten Hulscher
        <input type="checkbox" class="supplier" name="Artitec" value="Artitec"> Artitec

        <div class="clon-area"></div>

        <br><br>
        <select class="select_data">
            <option value="0">Not Downloaded</option>
            <option value="1">Downloaded</option>
              <option value="">All</option>
        </select>
        <br><br>
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
                <th>Excel</th>
                <th>Excel</th>

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
                    $product_id = $item->get_product_id();
                    $product = $item->get_product();
                    $product_name = $item->get_name();
                    $total = $item->get_total();
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
                    echo "<td>".$total."</td>";
                    echo "<td>".$supplier_article_number."</td>";
                    echo "<td>".$manufac_number."</td>";
                    echo "<td>".$product_name."</td>";
                    echo "<td> ". $order_id . "</td>";
                    echo "<td> non </td>";
                    echo "<td>".$download."</td>";
                    echo "<td>".$printed_date."</td>";

                    echo "</tr>";
                }
               }
            }
            echo "</tbody>";    
            echo "</table>";

 }



