<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_32829005_w379' );

/** Database username */
define( 'DB_USER', '32829005_1' );

/** Database password */
define( 'DB_PASSWORD', '3pS1q08[)O' );

/** Database hostname */
define( 'DB_HOST', 'sql204.byetcluster.com' );

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
define( 'AUTH_KEY',         'vnavi3r72msp4ic5qzdgqtwn9nh6ey24bigibtqwy73uepwumtgr9hzcbo1krbmb' );
define( 'SECURE_AUTH_KEY',  'rld9zjyy5kdpekmrmdvjnemf5pmwdzu2jbwy4rgmn94fawhvpr8sho3aakjdldo5' );
define( 'LOGGED_IN_KEY',    'mhwjtzjyapsdfnj7cu6ylosabv77sgfg3l8espxalggtujaeuowoaf2qk2qog3hr' );
define( 'NONCE_KEY',        'wwzj0p6id2o8lz4xbdymcmeadtphegucff6pmyslpicmdcu8hh6d8bwyw48twjyh' );
define( 'AUTH_SALT',        '84tmpanwseu1amsnjcgtpiyihwafgey06ccmjcr68obgcq102vdjpuxo2nnjovwh' );
define( 'SECURE_AUTH_SALT', 'eurq0lwssi0ddxi27knirwje6zggfxfahr6xi8dkocxlbmmkxh28ahp4khyahcxi' );
define( 'LOGGED_IN_SALT',   'zehmeeuwcpnndijplkpgnfhstxobscuhf1f81osiudsvjxzy9xmsa6xmkyznanl3' );
define( 'NONCE_SALT',       'rmkhdolpalqieiep7qyzfnq8rsa25rrximpivilp0m6o4zbygwumgwboxdxwghsh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuj_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
