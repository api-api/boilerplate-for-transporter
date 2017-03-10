<?php
/**
 * Transporter_Dummy_Name class
 *
 * @package APIAPITransporterDummyName
 * @since 1.0.0
 */

namespace APIAPI\Transporter_Dummy_Name;

use APIAPI\Core\Transporters\Transporter;

if ( ! class_exists( 'APIAPI\Transporter_Dummy_Name\Transporter_Dummy_Name' ) ) {

	/**
	 * Transporter implementation for [...].
	 *
	 * @since 1.0.0
	 */
	class Transporter_Dummy_Name extends Transporter {
		/**
		 * Sends a request and returns the response.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @param APIAPI\Core\Request\Request $request The request to send.
		 * @return array The returned response as an array with 'headers', 'body',
		 *               and 'response' key. The array does not necessarily
		 *               need to include all of these keys.
		 */
		public function send_request( $request ) {

		}
	}

}
