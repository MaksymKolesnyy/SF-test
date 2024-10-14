<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nfffoaxs_wp224' );

/** Database username */
define( 'DB_USER', 'nfffoaxs_wp224' );

/** Database password */
define( 'DB_PASSWORD', 'dD56pS4.[c' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pqju3mgrhkgswg6bslvk8hxf5pivz469edn69czp27jqmzlyzvm9ffnowubrpscl' );
define( 'SECURE_AUTH_KEY',  'ughwvo3r2alez8f7pl3ty1h84jhs9bvkbv2lsvisttsj5hoo2sqt6czkwwxgv13b' );
define( 'LOGGED_IN_KEY',    '5rvha3mk5wzbr4eak1jyfrvvy7im46hdvu2xrd0iwsyrii4tkdrwfqif9xgxo5ro' );
define( 'NONCE_KEY',        'spwe3yjb9fuolfu9ta1depbh1eyhp093dqatlwlz2frzb3tbskqgqigwmidpkqdu' );
define( 'AUTH_SALT',        '9qmleoxypfvrn1wp1rejha9lvfq1rrm82mxbedq8vpi2fsd2omb2qbuke8w82rcu' );
define( 'SECURE_AUTH_SALT', 'sxwubopiwqphnn5oemp2odzl3studqrjgonjswjvtpnberi4lrbydmdusykqonve' );
define( 'LOGGED_IN_SALT',   'u6jjjlff2xq1hupkkyrzl0hkejozlvc6kbgtjgogqfsriqjzwudosjy9jbk3qrai' );
define( 'NONCE_SALT',       'bbirdgq3mcjhtyefbgeoofdfmkrcghdtyxbo9qepliwrnuie2gngityjnjsk9mbk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpo0_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
