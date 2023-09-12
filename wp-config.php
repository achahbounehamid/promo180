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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'promo180' );

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
define( 'AUTH_KEY',         'p`d=z>05U9rv<0a;nVz%HxpRgU4r`~-K>iL]vS M3JpzW*W$)*+e>(pn!;}&Jd|3' );
define( 'SECURE_AUTH_KEY',  'kEA+o][h-,3N8i,dm+9FkP}xP&,^>s+,h,L>:sMCDQeJ4<g.;B x-|,;;mv/1~0s' );
define( 'LOGGED_IN_KEY',    '5Oesi Z<+03QIEGTZn9X2}<qZ:6Kd.Y]pWKb4(Nfwxrl8b/c8.X3@`;cM1Y_zYT<' );
define( 'NONCE_KEY',        'B1hJE*1q4YXE+kkrT?^<,@M`)YSI7{r8~^*zz3a1EgEU H!v+N%b2pvC2U~~<!Ki' );
define( 'AUTH_SALT',        'CMYy u|>t-%3-/c`5(^#/0{B2;R~JJ0#96(OI/}rv48b;,$LOXazCg5S f{=IhjS' );
define( 'SECURE_AUTH_SALT', 'LrZx%@OL)QhZ> Ab6M>fFgNNnjKdDt(e{y!O_H9kCckjR2x}Y[_ftj+`Wz^no+~~' );
define( 'LOGGED_IN_SALT',   'Mp1@6M%rQ9+*39(V^gkh/pQ0wPGM&1W<%:{Zmg@/kTI[u_[7q0xKP-c(BUE;=LMy' );
define( 'NONCE_SALT',       '*E4!Uj{n[/_t;F>AR2w<#Cv@<6P7f|yS?2JNHGL-s9dQM)]eU@U7WdYd^<g++NT<' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
