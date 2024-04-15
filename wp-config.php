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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress' );

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
define( 'AUTH_KEY',         'JA9Q,N<rU`p_+A=V6!2FR*&Zx|&^EZ)3E^M,AOc:m!HKX3RRFB#g9GH#X>pfnEy8' );
define( 'SECURE_AUTH_KEY',  'wjA`PFs+6=20]K+$Ny4`vPx;nN_kHL>M57H66iUi0Lti8<Ce;(o*4#5.D%W(OJ%d' );
define( 'LOGGED_IN_KEY',    '!.]nV+RWKl}Kh@F*{FqI97p+]TB{OF3Fd?QMe_:gUYZt y`t_~l=$C/R/>~Gg.Yj' );
define( 'NONCE_KEY',        'UHI-rqr?ajRW5F`qrB%dy@Yx2X(Re@vaW#0)c_ w#(wY^]-38N`<}x)?uTRQcWJR' );
define( 'AUTH_SALT',        '~k{PkGjYH/d}~2Ce[^#y7zIdqB@-?UKq!6)q9|K}]0`65]C211o#Q`${?u.o~au-' );
define( 'SECURE_AUTH_SALT', '^R<cp-~QM8cO)(e&}wH4QHS sq0=d,?$!A$LmU]:=W)<o5LGFgZ-2&n7E=`}IB/q' );
define( 'LOGGED_IN_SALT',   '&8w>i%5xmVU}xvJs0vEDQy}$qpu9wWnlh4#NWv= @^r_T*?0*dUcNi`l! mf$lbM' );
define( 'NONCE_SALT',       '4KqCA3b:DW[!loXT1<R7{7#mN3s/v{=0 ex1KNO9bR#y@VTDa1A5:Gl{cXy>tFpM' );

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
