<?php

/**
 * Plugin Name:       adrianpajares.com - VAT WooCommerce.
 * Plugin URI:        https://adrianpajares.com/
 * Description:       Plugin to add VAT field at WooCommerce Checkout (WooFunnels). Use field: {{vat}}
 * Version:           1.0
 * Author:            adrianpajares.com
 * License:           MIT
*/

add_action( 'after_setup_theme', function () {
    if ( ! class_exists( 'WFACP_Add_Address_Field' ) ) {
        return;
    }
    new WFACP_Add_Address_Field( 'vat', [
        'type'     => 'text',
        'label'    => __( 'VAT/NIF', 'woocommerce' ),
        'class'    => [ 'form-row-wide' ],
        'cssready' => [ 'wfacp-col-full' ],
        'required' => false,
        'priority' => 22,
    ], 'billing' );

} );
