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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'rPoYaMz$ NzkU~;D^0REqL,k6B;}LKY+9M4h0Y&9,t5,f1[6BpQY}!qRH@>t<,|K' );
define( 'SECURE_AUTH_KEY',  'Mf|xrHQ=0P-vzN&+?tF[R{Q_]0^RSb%R$ZH+NrbXdk=TD`9;iPuy{wHt5R5ld?7e' );
define( 'LOGGED_IN_KEY',    'F1F#)gy*/7g632&LV%>=JU;&=$J/aZp_Ew1_!8A=-1K?/QV[d$ZE]6w!zYhr8  A' );
define( 'NONCE_KEY',        'S;W,j^ ,lfOWof|<Kql_+1NZ#{]=lZ]*omOU*MQUK2s~ #_F/N(HppSjP$xc}3 `' );
define( 'AUTH_SALT',        'g7 6.8/$%EO42-vJN1&(qmwqXnCZ5><!-;K29I>K%ZIElfp[bZyG0tsI4KUg3;DC' );
define( 'SECURE_AUTH_SALT', 'SIYLw2QSDBm1 sAmJ!1C!5<(NoQJ.2K!InQPJB?+!_LfTw)^ I4}@xNL4|dtSUb7' );
define( 'LOGGED_IN_SALT',   'F5}]+_KHm.*@g% 6(FILRv j2%*`/ZH}%S(ljTh}^v}3!pki~,mbm!l,!E!izx~t' );
define( 'NONCE_SALT',       '+!KYsOm;e06@W^8_vnu*!(k_b}kH3zdH{:K-:])01{Ce?^m7D^$l`.M@eR^a@BcP' );

/**#@-*/

/**
 * WordPress database table prefix.
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
