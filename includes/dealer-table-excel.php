<?php

function my_delaer_excel_contents($order_id) {    
    ?>
        <h1>
            <?php esc_html_e( 'Dealer Excel Reports', 'my-plugin-textdomain' ); ?>
        </h1>
        <button id="download_excel">Export</button> <br> <br>
        <input type="checkbox" class="supplier" name="kok" value="kok"> Kok
        <input type="checkbox" class="supplier" name="manuer" value="manuer"> Manuer
        <input type="checkbox" class="supplier" name="tenlushccer" value="tenlushccer"> Tenlushccer
        <input type="checkbox" class="supplier" name="artisec" value="artisec"> Artisec

        <div class="clon-area"></div>

        <br><br>
        <table class="table table-bordered" id="excel_table">
            <thead>
                <tr>
                <th>Order ID</th>
                <th>Item ID</th>
                <th>Supplier</th>
                <th>EAN</th>
                <th>Amount</th>
                <th>Supplier Article Number</th>
                <th>Manufacturicle Number</th>
                <th>Title</th>
                <th>Reference</th>
                <th>Given Delivery Date</th>
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
                    $manufac_number =  get_post_meta($product_id , 'factory_article_number', true);
                    $supplier_article_number = get_post_meta($product_id , 'supplier_article_number', true);
                    $download = $item->get_meta('downloaded');
                    
                    echo "<tr>";   
                    echo "<td> #". $order_id ."</td>";
                    echo "<td>". $item_id ."</td>";
                    echo "<td>". $supplier ."</td>";
                    echo "<td> non </td>";
                    echo "<td>".$total."</td>";
                    echo "<td>".$supplier_article_number."</td>";
                    echo "<td>".$manufac_number."</td>";
                    echo "<td>".$product_name."</td>";
                    echo "<td> non </td>";
                    echo "<td> non </td>";
                    echo "<td>".$download."</td>";
                    echo "</tr>";
                }
               }
            }
            echo "</tbody>";    
            echo "</table>";

 }



