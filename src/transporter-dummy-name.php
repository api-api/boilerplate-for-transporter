<?php
/**
 * Transporter loader.
 *
 * @package APIAPI\Transporter_Dummy_Name
 * @since 1.0.0
 */

if ( ! function_exists( 'apiapi_register_transporter_dummy_name' ) ) {

	/**
	 * Registers the transporter for [...].
	 *
	 * It is stored in a global if the API-API has not yet been loaded.
	 *
	 * @since 1.0.0
	 */
	function apiapi_register_transporter_dummy_name() {
		if ( function_exists( 'apiapi_manager' ) ) {
			apiapi_manager()->transporters()->register( 'dummy_name', 'APIAPI\Transporter_Dummy_Name\Transporter_Dummy_Name' );
		} else {
			if ( ! isset( $GLOBALS['_apiapi_transporters_loader'] ) ) {
				$GLOBALS['_apiapi_transporters_loader'] = array();
			}

			$GLOBALS['_apiapi_transporters_loader']['dummy_name'] = 'APIAPI\Transporter_Dummy_Name\Transporter_Dummy_Name';
		}
	}

	apiapi_register_transporter_dummy_name();

}
