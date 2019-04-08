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
define( 'DB_NAME', 'jtxga_db' );

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
define( 'AUTH_KEY',         'RqCCscTrv[#*?ykL)I$Cv&XQ&<`)aAW4hH!)i`)vSVW)$Qq|{:l$Jq<(.-$+,za&' );
define( 'SECURE_AUTH_KEY',  ']tP~>+>BUi**AGp`06F2~~_GSN{ryY|J<<0?Wwwd5VuKY!`6{prhl`7}=|l95;(d' );
define( 'LOGGED_IN_KEY',    'pDyz{@V!gx}3_G4;}$)%;_2+l0kTHT&Bc{!,:n~c6M;`IOE_VvZ{pX<p^#dW5xm9' );
define( 'NONCE_KEY',        'yXU6(/ZFl&_yULEZU1`Zz~O(Io;o`HV2]/1qbF8rdB#~g@+3[0<JYThIT:sE$it@' );
define( 'AUTH_SALT',        'uZZ 3rvsmwj96l$_^r,BbR*c(Mjp.YwJCO=k b11Zba_s3bMBi=<a8SP`N2E5koz' );
define( 'SECURE_AUTH_SALT', 'wiX@~Jn-v&XM]2,G;.xfk2Pb)]Os$YDtCUOSsx|[Y3]EoJE%%2cF!3k:3zNMan_:' );
define( 'LOGGED_IN_SALT',   'Fae?2ku/FBC]#nk&%s{0DlG=o|d@7?kS+4V{2^SL|8F3`!V,>CB4*U1^dKWR@g1{' );
define( 'NONCE_SALT',       't#3N~.Q<A0>fbX%-QPqOF3|kw;:c83P$!^,<pv{]Li}2~o-o8u,J_|]$}B|N<Sp@' );

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
