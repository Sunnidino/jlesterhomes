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
define( 'DB_NAME', 'wordpress_lesterhomes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'w]-V^vJA(VK$=!1p?&TG!#-2S#2K3]e6SiVf/,w}0EG(0KK*|0B&I><QDfV#CC|{' );
define( 'SECURE_AUTH_KEY',  'a@k.* ?86C_gX.ps[JJ2Li:~O]0`}<)Lc`fN]1w%uv&Z@xAt{(>^|<t*0<*)VI5-' );
define( 'LOGGED_IN_KEY',    '=E8R^HA|CvFOO9ur-E:.DGIB~S6e-Y.gn]n;:GJuNRV:$J-3&|b@DKnU2_PQYaEy' );
define( 'NONCE_KEY',        '[{U^(lfJ^S,VjL-t2SrR:)a:1JV o_n($CNoOya||-:}59Vl6iO%VGyp,o~wk|1M' );
define( 'AUTH_SALT',        '?*oMUPdjp~bB`QK$*!!!a{Z<Llb(]g3K7JLyk({B=1@~O4HPL4AXDI:Bq.=A1>~A' );
define( 'SECURE_AUTH_SALT', 'PE2W6*8tG]xQi3=3a:728Nl{VOyqFm{>jGDOFj/pvz`bezv~g-kCET-N#Tne+q.e' );
define( 'LOGGED_IN_SALT',   'A[|#Hi,Pj5833zM)F-vcjW~bS#Z7F Psh@eyKCK*&S|m0}PF-Q }!>gr6pGbu8TE' );
define( 'NONCE_SALT',       '~jL*iphl$tT0bW9FY#M8!C/d)6oHNtf=,!np80+vK:irtpqPUtae^2H=fC<A;@(L' );

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
