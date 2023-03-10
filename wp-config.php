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
define( 'DB_NAME', 'snoow' );

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
define( 'AUTH_KEY',         '`js#Nuu@*+BEb;K{`5%4U-!+g8<Afjv-x9MO~2wAjj3,}uBtvp[!nM0fuyxH`c`3' );
define( 'SECURE_AUTH_KEY',  'xUN:RIb;^Op[k0t3+!.QO0&%#:,F8WUN?Ea2[pGdNhEii(bA}qoH>p8xBmBwo*$w' );
define( 'LOGGED_IN_KEY',    'T:.O0RQ4AeZPIF0<UH>QGL-nR[egA }po$fj|z<;Utct}EDMvKUN[UDb1D>u]qn[' );
define( 'NONCE_KEY',        'nMNz&;%PlN]}M#-5}@N8cP)#)C|wSAap(CLQQ&W@9LG@COTSe$6zOHu5eg~9ml2Z' );
define( 'AUTH_SALT',        'fG7O;CW:_)Q_!]QdyZ10z3ZTN0,a7H= ]/qY600r2q2Wq>dXB/G){ss%I(3Gz{#*' );
define( 'SECURE_AUTH_SALT', 'Z!S}`ov4NK1.X0[@D^;!`S#mZ+,HI9)k)RU?)~(g0D]q)bL_V=qI^EA[j.#SktkO' );
define( 'LOGGED_IN_SALT',   '}.WYL<xt:?B335[(o~w__b%0nl@+rTH>.#+c4=`NKB%-DH=;uM?*{k]r|8&d;}_a' );
define( 'NONCE_SALT',       'O*Zp=w~<X@m-Vp7@/4.vY-!2{<p$=X,^53+]R/B,@Q9SX0zCi:HBgRza==+yZ[m:' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
