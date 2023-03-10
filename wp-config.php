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
define( 'AUTH_KEY',         '>`|>%6Xq]B&prmL4pZdmaSVwSG3~QjHqa,9,>xz{uW2dfseRJ=cPc11U!V-}F8+S' );
define( 'SECURE_AUTH_KEY',  'XjVOHVCR@P9IC2@lqsB4qPFd{A:tK:w%U:f^(4e,rvgyHhjHpT5QnlPONkz;u_4<' );
define( 'LOGGED_IN_KEY',    '8c8eqm$bM`N[9g.ilc567J1F%yGpd-`r7}F],|]X`1&VSI#5DT2*`,w4R[8kmQ75' );
define( 'NONCE_KEY',        'IU;(Rr}4_v^N@y;1Z^JD{88;TKAb? ]r?-ZQ[Qujixd8bj~EyY3Z}0_5a/uy*vga' );
define( 'AUTH_SALT',        '#x9Et[/^cL{CI.N- eLnR4:c_oCnUMB}8LJLvBST%,;rCqk(%cISMjp?| gIRW]y' );
define( 'SECURE_AUTH_SALT', 'EV>*Vvm{3o89x^{`13E$oX AA(`>8={lasx3i&Z%]cW[`N3G4`yM~pkF)&:8jV&P' );
define( 'LOGGED_IN_SALT',   'T0-!(faO$7((~c#]GGmvpqC:{dxT!wS0}nOb6 @Bu7KT8A/KYooU;Gh)W-`dtE*o' );
define( 'NONCE_SALT',       '<jcBz$Y*)}DD6P*ijL=Mr?f/or6gBcu,uErNGt:*gDF4UUa%l1<w|[0m6yv)Fg17' );

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
