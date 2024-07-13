<?php

namespace Jazz\Composer\WPProPlugins\Plugins;

use Jazz\Composer\WPProPlugins\Http;
use InvalidArgumentException;

/**
 * Downloader for PublishPress Pro and Add-Ons
 */
class PublishPressPro extends AbstractEddPlugin {

	/**
	 * Get the download URL for this plugin from its API.
	 *
	 * @throws InvalidArgumentException If the package is unsupported.
	 * @return string
	 */
	protected function getDownloadUrlFromApi() {
		$id  = 0;
		$env = null;
		/**
		 * Membership licensing.
		 */
		$license = ( getenv( 'PUBLISHPRESS_PRO_KEY' ) ?: null );
		$url     = ( getenv( 'PUBLISHPRESS_PRO_URL' ) ?: null );

		/**
		 * List of official plugins as of 2023-01-20.
		 */
		switch ( $this->slug ) {
			case 'publishpress-authors-pro':
				$id  = 7203;
				$env = 'AUTHORS';
				break;

			case 'publishpress-blocks-pro':
				$id  = 98972;
				$env = 'BLOCKS';
				break;

			case 'publishpress-capabilities-pro':
				$id  = 44811;
				$env = 'CAPABILITIES';
				break;

			case 'publishpress-checklists-pro':
				$id  = 6465;
				$env = 'CHECKLISTS';
				break;

			case 'publishpress-future-pro':
				$id  = 129032;
				$env = 'FUTURE';
				break;

			case 'publishpress-permissions-pro':
				$id  = 34506;
				$env = 'PERMISSIONS';
				break;

			case 'publishpress-planner-pro':
				$id  = 49742;
				$env = 'PLANNER';
				break;

			case 'publishpress-revisions-pro':
				$id  = 40280;
				$env = 'REVISIONS';
				break;

			case 'publishpress-series-pro':
				$id  = 110550;
				$env = 'SERIES';
				break;

			default:
				throw new InvalidArgumentException( sprintf(
					'Could not find a matching package for %s. Check the package spelling and that the package is supported',
					$this->getPackageName()
				) );
		}

		/**
		 * Use add-on licensing if available, otherwise use membership licensing.
		 */
		$license = ( getenv( "PUBLISHPRESS_{$env}_PRO_KEY" ) ?: $license );
		$url     = ( getenv( "PUBLISHPRESS_{$env}_PRO_URL" ) ?: $url );

		$http = new Http();

		$api_query = array(
			'edd_action' => 'get_version',
			'license'    => $license,
			'item_id'    => $id,
			'url'        => $url,
		);

		// If no version is specified, we are fetching the latest version.
		if ( $this->version ) {
			$api_query['version'] = $this->version;
		}

		$api_url = 'https://publishpress.com';

		return $http->get( $api_url, $api_query );
	}

}
