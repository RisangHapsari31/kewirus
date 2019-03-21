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
define( 'DB_NAME', 'db_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mkoHcsVq:oMY1,RlYT)qo`O $!42G9?od0>]NOAtLf]8xzsAYN>;4!Wr-</k|fk/' );
define( 'SECURE_AUTH_KEY',  'elQTf)k[6u%<.8u0w@mroU+)V29:P&,e,vn^83dr qc2,j6mM22ghcp-9MEOmXRV' );
define( 'LOGGED_IN_KEY',    '_XAj9YLX+nUe|,M^a{eVNrKze){rI*IriD:3<4EC?/?6Ej/{;5MS-JRTDr<fRmm1' );
define( 'NONCE_KEY',        '1m;<cBjx B%^[wvAFju+{H.VJI|Vw-%nJ&+qJ1qdAZ~lmwEW3,7+`8YGBjpEvt H' );
define( 'AUTH_SALT',        'BF.0:rDx[/F DOfk_y^]Kme_IW ]/A#4/nkST?]0q?.%q:5Z0o#/[&)dn06Y-[hH' );
define( 'SECURE_AUTH_SALT', 'lgGK-^~Om~Y7A1[7~;.^imWMd^N@9[P|$4>e;?@M)02kA;L.P_UKK,+nZQ5:f,[m' );
define( 'LOGGED_IN_SALT',   '|LauBtLTnqkR)l~>W!I14H#>^HG*FJ-qLW8YWZW O}wMUyQJl>.2AahjZaKBR6No' );
define( 'NONCE_SALT',       'vrSgUh0Ou-b4l_RA(eA4f:yc=;s?Oo|,+<&~L+Ut=b_1L9}`ea&O{ tBpCuKrp`@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
