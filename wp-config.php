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
define( 'DB_NAME', 'jamestumarao_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'qE}<4(1#Gal-]n;J[wOl[oIzBS;M-m>~JPV,>SXjT3ka$wp_`Be=hpQd`Df``)oM' );
define( 'SECURE_AUTH_KEY',  'F|2N;GhJ0*T5zd6j?(>!^M[7%&~IA@_UwvnOAg42fvN6CVC;tBh<JTOK=5S!Y*Em' );
define( 'LOGGED_IN_KEY',    'i2X`)?u32`s5Rf^o jf7%J7_@g:UlL4de?0&*(yP:Se(`olFHu:*0h)-4gM@,/7T' );
define( 'NONCE_KEY',        'K%DkuA9*S5^*dN2-G)m51piLG`v4tZe/.2B{Bm4W GxxCGu7Z7;=-8j.K I?bG6X' );
define( 'AUTH_SALT',        'K?fyIo@2J9K|o+o0Hw]6576bYp,O&CvwUM+:x g?aah|AXNybtTxScISFrw^1j_n' );
define( 'SECURE_AUTH_SALT', '*jW}M.nL3p#sfzXfb/+QnGi;Z;3T6F_:>P`fSHRgYDx4be|y!|5*dM6X]aRnkRQ?' );
define( 'LOGGED_IN_SALT',   'e3vc;m,zzz9hb 6;X[!+GM/[,q|?>BM?rVrLte-.s(K*Zs3CLCh/W,uM=U40b[h}' );
define( 'NONCE_SALT',       '!cPL~TuQDL<djJI5 V_;g}Y{).UM>hULiRx`CUw(@$hfGvPA,C{4r:rI/!;2F*4j' );

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
