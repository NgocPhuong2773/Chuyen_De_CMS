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
define( 'DB_NAME', 'wordpress_581' );

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
define( 'AUTH_KEY',         'U1]}(YhTwcwA8d6{Dxl%Ejd(bf:h[8T{fl.;htidb03QF}* xCI U)PEKtvfO(D^' );
define( 'SECURE_AUTH_KEY',  'PCP63@IS-8ua@{~T3i%4#6lA9~iM==4SF/vl0/?G>nc>BLIC8q|8W39:T(!)Hk}r' );
define( 'LOGGED_IN_KEY',    '0Nr4.D$4,Ko&8x1)iWO,9h]m6%7D3OP)mX(V`.zjIf@F+s.h PKz!E1OE[Z*So^o' );
define( 'NONCE_KEY',        '1PSsvJt2R|c4d?GtVM!Y~][`5gP+G8x[z9~iQ!w`*m.T,We_6EZ?D1BR~J.*i$HZ' );
define( 'AUTH_SALT',        't<%#wSfFHbr~zL-J/_~CU6#7(JsS]3@)^vjU).ylUQeWW578l(]Pv0c)!LN/jTqq' );
define( 'SECURE_AUTH_SALT', '+eE9*dff>} 67f&Pu^Pu@7H&X.|j Q{cx)2jM?v~ Wl~ Q#o4*7g*,2M<klpD=nr' );
define( 'LOGGED_IN_SALT',   'YfF=5GELR6<(Yz0xo!t:6ZH9qam9.~a{gvW_70Y_4ot.$7A<_@=p*uPqY{b8^&Fa' );
define( 'NONCE_SALT',       'ixT%eA*tj1Zv3bxc>zVg.?i`Q/v4Gn@/Bv7R-LS3he_ZQF[%]|v<Qq>jZVBj8UhI' );

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
