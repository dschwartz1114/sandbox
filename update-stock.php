<?php

// Clear Stock
function clear_current_stock(){ 
// Declare the $wpdb var
    global $wpdb;
// Run My SQL Query (My Query is setting the meta value for stock to zero)
// Future will loop in products and update the stock based on imported values
     $wpdb->query("UPDATE wp_postmeta SET meta_value = 0 WHERE meta_key = '_stock'");
// Check if there were any errors or if query was successful.
    if ( is_wp_error( $wpdb ) ) {
         echo $wpdb->get_error_message();
    }
    else {
         echo 'true';
    }
}
?>

<?php clear_current_stock(); ?>
