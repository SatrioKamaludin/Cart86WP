<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'cart86wp' );

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
define( 'AUTH_KEY',         'TekSy$Jd+OC|Sx9}Pj|,bjS)_i!tGKTq=~ZTsllAg54XHK&NbW; qF(@n&uUPFA.' );
define( 'SECURE_AUTH_KEY',  '~JFGQDf~D=L}dCz`b,6.L$86<^=#*SD8(L#}3F)av.cQoyAjIAO&_BA<HY(uT/QR' );
define( 'LOGGED_IN_KEY',    '-i Dx`yuK!E*i0V=WoSGj:(N8dh/U>#.h%^m><{h-reWl.e7kh9D|Wrpv=I&0gS/' );
define( 'NONCE_KEY',        'c58%/%+uH.f|La#z?G/qdb+v@C)V}TWpzRE$^_kLl;#/.w`@OCjouk0[wTs@0$OD' );
define( 'AUTH_SALT',        '/k_7*:AQ1b8-JhN/;i;et!7:0h{j%rM{EC&/F-5mo:C(y6D{Esw+2)XT)_:&<9n7' );
define( 'SECURE_AUTH_SALT', 'r{r48}*q[NQ7_A~Ic<D@ B65F-@Vbx9+zq!~P`3!`4{{Fh`^~.,?Yo}E%SmgI/7~' );
define( 'LOGGED_IN_SALT',   'j[+W,r%<mwC?=__aGkPPj0[nj]$#`:ueV#4jUD@+-Ph=|/TRk.1AXuZg,^_b}ge}' );
define( 'NONCE_SALT',       '1V <=n)?t`%Ww1-t (WRw6eXN_S|hx?S&To>R4U$_T?H;&:cAbxL/?n$vE}tCwil' );

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
