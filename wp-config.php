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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'merka' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ugGwJW,EOjkV6$xje<&piQm9hEq3OWbE*T1,okYZWQ}O6^[@i@*q8MNi~iv0(:[0' );
define( 'SECURE_AUTH_KEY',  'fX=DPUgGtEg)T]1{/~0[xZ_8H^bHQ=:X%ac-Dz}@#BDC+E=.UkH3%Yu;&.eKYQ|n' );
define( 'LOGGED_IN_KEY',    'zR6[[vx5VG&OK`k@Vx0_3 G[:wfNgsQ+ 2=DT4R)si{f_~z)Xw  >,3QW%3wq#:H' );
define( 'NONCE_KEY',        ',p$//3Ee=~Vwi)4X8Ma%#W-x@? #g,*~$o3J.>(:m&x-K6=w3<N3(0@3.+E$ s-8' );
define( 'AUTH_SALT',        '~Hy`^3-1Idlds+MuY@_8)Aax[`$uI$m1A(~hf+v{N0@`0Os<1,@+W5W=LYzJA %E' );
define( 'SECURE_AUTH_SALT', 'fw8UG0-V3/2A0T5t%+#Yv3:*QEz@6h8]hEkwRkA=!T(DU0Z{ U3~MG%H?MZdXV,s' );
define( 'LOGGED_IN_SALT',   'Ys CP$t:QT1S5I.GxK i&M^BTs=%TLZn0d-tD{KZ2Qr>Uhpe]VyoL%`<I(Za$5lN' );
define( 'NONCE_SALT',       '{@J _wJ)&`zX)L58kmn5v1*Rq^k2!b}MIPMAsMs|V$w4RP(-/>#1avDgHCD>[}b}' );

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
define('FS_METHOD','direct'); 