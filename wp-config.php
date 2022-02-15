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
define( 'DB_NAME', 'demoproject' );

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
define( 'AUTH_KEY',         'G[vK2qxE3e`~b tl/Ex[P mW?<7Ry/Rmr`K>(JuHlQ2?rtiM0{Oh]0D:Urd&F&F4' );
define( 'SECURE_AUTH_KEY',  'NB_:ei[`JoNk?@V.}9P|q#u,EH:;:uO&_YKFm~D-t<]rPLPhP$:UtJqQ2Ag@Yo/P' );
define( 'LOGGED_IN_KEY',    'ukS`J|!c=,Q{b3{jdOr.8&c/f.?[&f<Kvph7UsgIETYSri|d5@E#:G#QcG^`L-fn' );
define( 'NONCE_KEY',        'FW.ykbTM{NC}|Rsk$n.GH+&E!M++`XS!~`v#.7&Wzn|o>H>9%^TfoiAu&UX)bkKJ' );
define( 'AUTH_SALT',        'Kye%w):7QpQ]dg%g(,4EY7E*XzJAw+6ixS9},cF>epLk`kn{mYtjD:rf%#_l.5!.' );
define( 'SECURE_AUTH_SALT', 'Y@i<+^@8kzfu{k$@s`dl5u-TtHnjNG>ApE<m&{5B}nqLKLSF>-_|mnz]p(40QqGz' );
define( 'LOGGED_IN_SALT',   'r6X.An%[FiNe#vT<u96j|(f=C]^6j1%/2tWn1E5EhFC]1Vx^1CIWUB%bzOFon7f8' );
define( 'NONCE_SALT',       '0Fj[3-5|+;]~)80JJq*sZ=4ln_&?ShV.0lylms|g#o33p !.wRgCq:-3>>#lfi)o' );

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
