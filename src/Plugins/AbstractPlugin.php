<?php

namespace Jazz\Composer\WPProPlugins\Plugins;

/**
 * Abstract Downloader for WordPress Plugins
 */
abstract class AbstractPlugin {

	/**
	 * The version number of the plugin to download.
	 *
	 * @var string
	 */
	protected $version;

	/**
	 * The name of the plugin to download.
	 *
	 * @var string
	 */
	protected $slug;

	/**
	 * The name of the package vendor.
	 *
	 * @var string
	 */
	protected $vendor;

	/**
	 * AbstractPlugin constructor.
	 *
	 * @param string $version
	 * @param string $slug
	 * @param string $vendor
	 */
	public function __construct( $version, $slug, $vendor ) {
		$this->version = $version;
		$this->slug    = $slug;
		$this->vendor  = $vendor;
	}

	/**
	 * Get the download URL for this plugin.
	 *
	 * @return string
	 */
	abstract public function getDownloadUrl();

	/**
	 * Get the plugin's Composer package name with vendor.
	 *
	 * @return string
	 */
	protected function getPackageName() {
		return $this->vendor . '/' . $this->slug;
	}

}
