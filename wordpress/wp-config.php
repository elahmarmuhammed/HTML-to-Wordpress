<?php
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
define( 'DB_NAME', 'keepitsimple' );

/** Database username */
define( 'DB_USER', 'keepitsimple' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'if8+Qp{l]&2a<CL_LDL@iO{(V_T*;V9AxfLn87v*qQvL<khc1t4!BJ qb92c[eq=' );
define( 'SECURE_AUTH_KEY',  '6Z#+jZ!UvFd4{IDM>rRt@.|`TDin(j8 $N&SF(Mha+lvH/x9**vD6Klx[5W<JR$ ' );
define( 'LOGGED_IN_KEY',    '% OBKw} Lu-0R^wLzOyjQPXj]]rZ:J>[Me3nO#wRv:Qyg9M^(l,cMDpSBHc4Qj,h' );
define( 'NONCE_KEY',        '_~Y(T6=*m|ZP:Zmd1lhHDJ7/L.B=.ZS6zj{7iyzKp/:EmqIM,:JWnc=~J@u#sTmW' );
define( 'AUTH_SALT',        'rx69xD5{u;24u|h&f5]6H6do+hU7aI.]I:#v?n:7}.WVcF,O>AoYL2+=sB$Ci?tT' );
define( 'SECURE_AUTH_SALT', '60Tv;{%F_3J[`[EoYkT~!O8Y]Y(YVcQ@K+aGp e*2-_3>t%bJ|3u:mqBOQ_$qz]C' );
define( 'LOGGED_IN_SALT',   'F!Le^?G>Z~O]/Y^_ZWe J0:@U9aD%iLy(.Z[:RRAbX2+CJ$t#q&WqC5t2?t7D:f-' );
define( 'NONCE_SALT',       '7=olla1<a,*zJsdej6#yE4)%S$jWM?dau.n+8W8}Lgvz%L>92:7+t$?s}_>Tu:}L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
