<?php
if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

foreach ( glob( QODE_COMPARE_FOR_WOOCOMMERCE_ADMIN_PATH . '/helpers/*.php' ) as $module ) {
	require_once $module;
}
