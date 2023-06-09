<?php
/**
 * Gravity Forms Plugin.
 *
 * @package Junaidbhura\Composer\WPProPlugins\Plugins
 */

namespace Junaidbhura\Composer\WPProPlugins\Plugins;

use Exception;
use Junaidbhura\Composer\WPProPlugins\Http;
use UnexpectedValueException;

/**
 * GravityForms class.
 */
class GravityForms extends AbstractPlugin {

	/**
	 * GravityForms constructor.
	 *
	 * @param string $version
	 * @param string $slug
	 */
	public function __construct( $version = '', $slug = 'gravityforms' ) {
		parent::__construct( $version, $slug );
	}

	/**
	 * Get the download URL for this plugin.
	 *
	 * @throws UnexpectedValueException If the response is invalid.
	 * @return string
	 */
	public function getDownloadUrl() {
		$http = new Http();

		$api_query = array(
			'op'   => 'get_plugin',
			'slug' => $this->slug,
			'key'  => getenv( 'GRAVITY_FORMS_KEY' ),
		);

		$api_url = 'https://gravityapi.com/wp-content/plugins/gravitymanager/api.php';

		try {
			$response = unserialize( $http->get( $api_url, $api_query ) );
		} catch ( Exception $e ) {
			$details = $e->getMessage();
			if ( $details ) {
				$details = PHP_EOL . $details;
			}

			throw new UnexpectedValueException( sprintf(
				'Could not query API for package %s. Please try again later.' . $details,
				$this->getPackageName()
			) );
		}

		if ( ! is_array( $response ) ) {
			throw new UnexpectedValueException( sprintf(
				'Expected a serialized object from API for package %s',
				$this->getPackageName()
			) );
		}

		if ( empty( $response['download_url_latest'] ) || ! is_string( $response['download_url_latest'] ) ) {
			throw new UnexpectedValueException( sprintf(
				'Expected a valid download URL for package %s',
				$this->getPackageName()
			) );
		}

		return str_replace( 'http://', 'https://', $response['download_url_latest'] );
	}

}
