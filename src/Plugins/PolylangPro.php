<?php

namespace Jazz\Composer\WPProPlugins\Plugins;

use Jazz\Composer\WPProPlugins\Http;

/**
 * Downloader for Polylang Pro
 */
class PolylangPro extends AbstractEddPlugin {

	/**
	 * Get the download URL for this plugin from its API.
	 *
	 * @return string
	 */
	protected function getDownloadUrlFromApi() {
		$http = new Http();

		$api_query = array(
			'edd_action' => 'get_version',
			'license'    => getenv( 'POLYLANG_PRO_KEY' ),
			'item_name'  => 'Polylang Pro',
			'url'        => getenv( 'POLYLANG_PRO_URL' ),
		);

		// If no version is specified, we are fetching the latest version.
		if ( $this->version ) {
			$api_query['version'] = $this->version;
		}

		$api_url = 'https://polylang.pro';

		return $http->get( $api_url, $api_query );
	}

}
