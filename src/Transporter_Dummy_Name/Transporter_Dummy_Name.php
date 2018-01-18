<?php
/**
 * Transporter_Dummy_Name class
 *
 * @package APIAPI\Transporter_Dummy_Name
 * @since 1.0.0
 */

namespace APIAPI\Transporter_Dummy_Name;

use APIAPI\Core\Transporters\Transporter;
use APIAPI\Core\Request\Request;
use APIAPI\Core\Exception\Request_Transport_Exception;

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
		 *
		 * @param Request $request The request to send.
		 * @return array The returned response as an array with 'headers', 'body',
		 *               and 'response' key. The array does not necessarily
		 *               need to include all of these keys.
		 *
		 * @throws Request_Transport_Exception Thrown when the request cannot be sent.
		 */
		public function send_request( Request $request ) {

		}
	}

}
