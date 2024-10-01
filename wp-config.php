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
define( 'DB_NAME', 'WebEjemplo' );

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
define( 'AUTH_KEY',         'L[JhE@2Lri;#_lEg`DT7L[fs}RIT5Vd?wDhdQiOubu~~vgw@Y,3p040on69,K3}C' );
define( 'SECURE_AUTH_KEY',  ']_~c0rr:4h3~jO< JJuj:`yzJrDA|1U;,5JgI:r.AnNb+dYYyy<jB}^]cfPDHfr~' );
define( 'LOGGED_IN_KEY',    '1)SZhT)1rHP$%VZjYm0aNn6ALcvRPsfCq*}!#W@gbgFs]&c0br4h=_btS#h,1fU~' );
define( 'NONCE_KEY',        'ql=1/:7?+U2gZ)UB;3@6l>KV=w}5ZN[mle!C/ag1CaL^f(FjaP~)s`X1jxeBzzL5' );
define( 'AUTH_SALT',        'cla3sL@kUK3i@9EhSDGO4TY*[c.{lBH;*:aFH ,)jf@[|rgicuT 9lhI@TV_>d,t' );
define( 'SECURE_AUTH_SALT', '#2;o^mv!p#^w$EZr`ZJ/}I:))z-{KINz(0S~V+S7USzVq6qi1iUGH9T34>rE1U7E' );
define( 'LOGGED_IN_SALT',   'C.2.LG6U>ud08jHlifFZs/N.<$x($:`PS9j[1j>Q0tKuABQ6qQ;gEqb)FVE1]-{7' );
define( 'NONCE_SALT',       'm+o}G.F.36-$6^-d_8 SLK~k=%V[Q7tF1R^$Y!I|}]MpH4-e%~#&A_B!wSAJ+&|i' );

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
