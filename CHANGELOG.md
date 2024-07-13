# Changelog

## [Unreleased]

### Breaking Changes

The `junaidbhura/composer-wp-pro-plugins` repository has been abandoned.
The `wp-jazz/composer-wp-pro-plugins` repository will serve as the continuation
of the Composer plugin.

For more information about this change, please read "[Should this plugin exist?](https://github.com/junaidbhura/composer-wp-pro-plugins/issues/69)".

#### For Composer users

The next time users interact with `composer`, users will be notified
that `junaidbhura/composer-wp-pro-plugins` is abandoned with a suggestion
to use `wp-jazz/composer-wp-pro-plugins`.

To switch to the new Composer plugin:

1. In your `composer.json` file, replace occurrences `junaidbhura/composer-wp-pro-plugins`
   with `wp-jazz/composer-wp-pro-plugins`.
2. Optional; rename the vendor of repository definitions for WordPress plugins.
   For example, replace `junaidbhura/gravityforms` with `wp-jazz/gravityforms`.
	* The new Composer plugin will remain backwards compatible with WordPress plugins
	  that continue to use the `junaidbhura/*` vendor name after transitioning to
	  new the package.
3. Execute `composer update wp-jazz/composer-wp-pro-plugins` to install
   the package into the `vendor/` directory and update the `composer.lock` file.

#### For contributors

Users using a git clone will need to update the clone address
from `git@github.com:junaidbhura/composer-wp-pro-plugins.git`
to `git@github.com:wp-jazz/composer-wp-pro-plugins.git`.

* Contributors will need to fork the new repo and add both the new fork as well as
  the new repository as remotes to their local git copy of `composer-wp-pro-plugins`.
* Users who have (valid) open issues or pull requests in
  the `junaidbhura/composer-wp-pro-plugins` repository are invited to resubmit these
  to the `wp-jazz/composer-wp-pro-plugins` repository.

### Added

* Add EditorConfig to enforce consistent coding styles and PHPStan to identify coding issues (@mcaskill wp-jazz/composer-wp-pro-plugins#4).
* Throw an error if we download the incorrect version of Gravity Forms (@mcaskill wp-jazz/composer-wp-pro-plugins#3).

### Changed

* Improve error reporting and logic for handling downloads (@mcaskill wp-jazz/composer-wp-pro-plugins#2).
* Decouple vendor name for WordPress Plugins to support `wp-jazz/*` and `junaidbhura/*` for backwards compatibility.
* Rename PHP namespace from `Junaidbhura` to `Jazz`.
* Clean-up PHPDoc block comments.

## [1.8.0] — 2023-03-14

* Move source code to `src/` directory (@szepeviktor junaidbhura/composer-wp-pro-plugins#59).

## [1.7.0] — 2023-03-06

* Improve error handling and abstract commonalities download classes (@mcaskill junaidbhura/composer-wp-pro-plugins#52).
* Add support for PublishPress Future Pro (@mcaskill junaidbhura/composer-wp-pro-plugins#51).
* Add support for WPML (@mcaskill @Spidlace junaidbhura/composer-wp-pro-plugins#53).

## [1.6.1] — 2023-02-26

* Change download URL (`gravityhelp.com` instead of `gravityapi.com`) for Gravity Forms (@benharrop junaidbhura/composer-wp-pro-plugins#50).

## [1.6.0] — 2023-01-23

* Add support for ACF Pro Extended  (junaidbhura/composer-wp-pro-plugins#44), Ninja Forms (junaidbhura/composer-wp-pro-plugins#46), PublishPress Pro (junaidbhura/composer-wp-pro-plugins#45).
* Use `composer/semver` and better fallbacks for failed downloads (@mcaskill @jarstelfox junaidbhura/composer-wp-pro-plugins#47).
	* Throw an error if we download the incorrect version of ACF Pro Extended, Ninja Forms, PublishPress Pro, Polylang Pro, or WP All Import / Export.

Props @mcaskill @jarstelfox ! 🎉

## [1.5.0] — 2022-12-15

* Change HTTP method (`GET` instead of `POST`) for WP All Import / Export (@jessedyck junaidbhura/composer-wp-pro-plugins#40).

## [1.4.1] — 2022-10-09

* Fix an issue where WP All Import / Export wouldn't work in certain cases (@david-bzh junaidbhura/composer-wp-pro-plugins#39).

## [1.4.0] — 2022-04-21

* Add support for WP All Export User add-on (@Mahjouba91 junaidbhura/composer-wp-pro-plugins#37).
* Fix compatibility with Composer v2.3+ (@arjendejong12 [junaidbhura/composer-wp-pro-plugins#34](https://github.com/junaidbhura/composer-wp-pro-plugins/issues/34#issuecomment-1089309310)).
	* See [README](https://github.com/wp-jazz/composer-wp-pro-plugins/blob/1.4.0/README.md#usage)
	  for details.

## [1.3.0] — 2021-09-08

* Add support for WP All Export add-ons (@vaandefanel junaidbhura/composer-wp-pro-plugins#29).

## [1.2.1] — 2021-07-14

* Fix WP All Import / Export add-ons.

## [1.2.0] — 2021-02-03

* Add support multiple versions of `vlucas/phpdotenv` (v3, v4, and v5) (@mcaskill junaidbhura/composer-wp-pro-plugins#25).

## [1.1.0] — 2020-10-30

* Add support for Composer v2 (@mcaskill junaidbhura/composer-wp-pro-plugins#24).

## [1.0.10] — 2020-09-12

* Fix Composer caching of supported WordPress plugins (@mcaskill junaidbhura/composer-wp-pro-plugins#20).

## [1.0.9] — 2020-09-11

* This plugin is now compatible with `hirak/prestissimo` (@mcaskill junaidbhura/composer-wp-pro-plugins#21).

## [1.0.8] — 2020-03-12

* Update `vlucas/phpdotenv` from v3 to v4 to support the latest `roots/bedrock` setup (@davidwebca junaidbhura/composer-wp-pro-plugins#16).

## [1.0.7] — 2019-03-05

* Fix integration of `vlucas/phpdotenv` (@mcaskill junaidbhura/composer-wp-pro-plugins#6).

## [1.0.6] — 2019-02-28

* Update `vlucas/phpdotenv` from v2 to v3 to avoid conflict with `roots/bedrock` (@junaidbhura junaidbhura/composer-wp-pro-plugins#5).

## [1.0.5] — 2018-10-30

* Fix a bug where Gravity Forms would not work because of a cURL issue
  on some Windows machines.

## [1.0.4] — 2018-08-09

* Add support for WP All Import / Export Pro and add-ons.

## [1.0.3] — 2018-07-20

* Add support for Gravity Forms and all it's add-ons.

## [1.0.2] — 2018-07-04

* Fix PSR-4 namespace.

## [1.0.1] — 2018-07-03

* Add plugins to PSR-4.

## [1.0.0] — 2018-07-02

* Initial release. Provides support for Advanced Custom Fields Pro and Polylang Pro.

[Unreleased]: https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.8.0...HEAD
[1.8.0]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.7.0...1.8.0
[1.7.0]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.6.1...1.7.0
[1.6.1]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.6.0...1.6.1
[1.6.0]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.5.0...1.6.0
[1.5.0]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.4.1...1.5.0
[1.4.1]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.4.0...1.4.1
[1.4.0]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.3.0...1.4.0
[1.3.0]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.2.1...1.3.0
[1.2.1]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.2.0...1.2.1
[1.2.0]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.1.0...1.2.0
[1.1.0]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.0.10...1.1.0
[1.0.10]      https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.0.9...1.0.10
[1.0.9]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.0.8...1.0.9
[1.0.8]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.0.7...1.0.8
[1.0.7]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.0.6...1.0.7
[1.0.6]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.0.5...1.0.6
[1.0.5]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.0.4...1.0.5
[1.0.4]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.0.3...1.0.4
[1.0.3]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.0.2...1.0.3
[1.0.2]       https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.0.1...1.0.2
[1.0.1]:      https://github.com/wp-jazz/composer-wp-pro-plugins/compare/1.0...1.0.1
[1.0.0]:      https://github.com/wp-jazz/composer-wp-pro-plugins/releases/tag/1.0
