<?php

call_user_func( function() {

	$constants = array(
		'DB_NAME' => 'baristio',
		'DB_USER' => 'baristio',
		'DB_PASSWORD' => 'baristio',
		'DB_HOST' => '127.0.0.1',
		'DB_CHARSET' => 'utf8',
		'DB_COLLATE' => '',

		'WP_CACHE' => false,
		'WP_CACHE_KEY_SALT' => 'barist.io',

		'WP_DEBUG' => true,
		'JETPACK_DEV_DEBUG' => true,
		'SAVEQUERIES' => true,

		'SCRIPT_DEBUG' => true,
		'CONCATENATE_SCRIPTS' => false,
		'COMPRESS_SCRIPTS' => false,
		'COMPRESS_CSS' => false,

		'FORCE_SSL_LOGIN' => false,
		'FORCE_SSL_ADMIN' => false,

		'DISALLOW_FILE_MODS' => true,
	);

	foreach ( $constants as $key => $value ) {
		if ( ! defined( $key ) ) {
			define( $key, $value );
		}
	}
} );

ini_set( 'error_log', '/tmp/php_errors.barist.io.log' );
