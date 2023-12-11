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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'commerce' );

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
define( 'AUTH_KEY',         'Q ~R.h{*!~1OSaSF]|G!Ln4,4EsC7ZxnYI#lhZ,`Xc$[^a;IDl{-OlAz|d)QZh m' );
define( 'SECURE_AUTH_KEY',  'm84rSzF%krl{CW=ZP]R#mn`>d9D* vH&kPv<gIZi7>5B=x0H+U@L:!_Kmwtty_J~' );
define( 'LOGGED_IN_KEY',    '-n.h-f|W?o!%Z!<o5!2=TERUftXb1IC20M:)w0{$20Ng&=xw}TfFnBQq4lUzy;3D' );
define( 'NONCE_KEY',        'y :J^$|cjV@_{Fd}/LRUC{kK5$?RU8ovN.Y^oEQlS)Je6aL2_Pa>zPoFGsh!-%L^' );
define( 'AUTH_SALT',        'u|3U>s8^5 b!:AYYZ)[-J%/{^OG8i6}+N&cg}I_%Lx}Zi6m^#-RW15A)nKL:nr7>' );
define( 'SECURE_AUTH_SALT', '{U^a B9P) =!=$l2Yr=S9Dw.%aLdiM<?kTE6{3-ZB2BfwipHuv%:!B;|8>6IlOA6' );
define( 'LOGGED_IN_SALT',   'A^%TR=|v<8rPWDdSO>=J@CE3j>eF)^KW(Kn,CJ:I3s?M]r?Y=hFy9k)susgsXQ`=' );
define( 'NONCE_SALT',       '/-WF!^~n!/hK`t KC6RxNCD,6Zdxt?=tb^0DRK+<A d9z?!<}t;&KJsFzEv8mTIU' );

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
