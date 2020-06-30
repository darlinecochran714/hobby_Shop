<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CbAWOOPYhFS8fblhGsB8vPJfKj8AfU6dspk3i4oV84N7pqXtpTNXiOQcohd4PX41Wc7n/NLUN4cMKi+uT5pUXg==');
define('SECURE_AUTH_KEY',  'Jr4k0QPh6fNuk8pHIFHdoljU6SmnwoEO5API55xqasx7lI44u1VsjYebPNEJEYGHfIs2IbIqLfR3b7ZEbMsIRA==');
define('LOGGED_IN_KEY',    'SMNr3Jt0bqORnzYKiRO6X5tpxd3c0DWdMEAMYxXAXnyjnBjHgNgNAKRDjCzeDtmQt/pMTTNNLTcKTFtfrCYahQ==');
define('NONCE_KEY',        '3mtc+zBsvzEOIxcYEQQidtguKEjqwE6eUk5l1aAFuPtxsY1ccJmTZg85qkA7UBiJaoLMlpzCt1YbVLPjVq33gQ==');
define('AUTH_SALT',        'Mp8fHaE1eMHmNQ7uw2ecDtCPs/JGP+D2TPSQS0yKth0joSNou8MDreWV/kGM3P+WZhqdlBaJsbV/unmofMumpw==');
define('SECURE_AUTH_SALT', '248+9s6eKfhrxLfNEIUXZubIYv151PA6FWNNxMp7gJZyMys9Vt0aFpJh9TJDT+amcr4y++3ur2pDo2MiEMaz1Q==');
define('LOGGED_IN_SALT',   'yVwQN1WhYgI+CYK1iAJAmFcFFIE+bEZHx64c5gHJWoyZOjF2HlBsvlxNXOx3WErNPQsJuPcdHclOIWr5W9Jo9w==');
define('NONCE_SALT',       'tqEAdpG18ae8aXDRRRv7TUxnd9LeZP6fezMFidGVG3qORzYgxzeKaKNka2A6M2JzoX3f554oHHkTVUIhyZEMtg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
