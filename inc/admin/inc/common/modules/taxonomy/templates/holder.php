<?php
if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

foreach ( $this_object->get_child_elements() as $key => $child ) {
	foreach ( $child->get_scope() as $scope ) {
		if ( $taxonomy === $scope ) {
			$child->set_layout( $layout );
			$child->render();

			wp_nonce_field(
				'qode_compare_for_woocommerce_framework_taxonomy_nonce',
				'qode_compare_for_woocommerce_framework_taxonomy_nonce'
			);
		}
	}
}
