<?php

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
	/**
	 * Local configuration information.
	 *
	 * If you are working in a local/desktop development environment and want to
	 * keep your config separate, we recommend using a 'wp-config-local.php' file,
	 * which you should also make sure you .gitignore.
	 *
	 * IMPORTANT: ensure your local config does not include wp-settings.php.
	 */
	require_once( dirname( __FILE__ ) . '/wp-config-local.php' );
} else {
	die();
}

/* Standard wp-config.php stuff from here on down. */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
if ( ! defined( 'WPLANG' ) ) {
	define( 'WPLANG', '' );
}

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * You may want to examine $_ENV['PANTHEON_ENVIRONMENT'] to set this to be
 * "true" in dev, but false in test and live.
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy Pressing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
