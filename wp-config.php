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
define( 'DB_NAME', 'jewellery-store' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '0^a`Ei27GKuPU>X)0K%cjtnbBhn$sDhQNU38_LSb {{(SnR|!_}OiGVD;0F1LNG/' );
define( 'SECURE_AUTH_KEY',  ' iay;e!uh<V%EL|SO*F%:]@><;^iglnh:jW*5a0<uXyz}JO<]~%%;7M8 92mL[0:' );
define( 'LOGGED_IN_KEY',    '&;QJUo8IM =nA54~{x`%iJXqQgWzHOOsMPo zpN9TC6?VAj$z~5DcMyKQi/@q,<s' );
define( 'NONCE_KEY',        'ILBc*g:zXC~F>Hs{<%}v1G0Z|sFHqW(NYNB~`<UFf=Cnz0LuKsxaW5[E4^CDXwyz' );
define( 'AUTH_SALT',        'BNL_%2lVk32GWtwX=%+*j(j<DB$_(<~lj-J/?.Y1&&CvK$l&s$`+(6lo)3alrSJl' );
define( 'SECURE_AUTH_SALT', ' Y<08dZcD[L{4|N$!:TAfxwR@kRA8ft^OXF,R}[fFK[FUT:_GusM%wLC_b&^UH A' );
define( 'LOGGED_IN_SALT',   '%U>>z9yIV.g^3*eQ_C|#RJ#/[o6BFC**lnFEp8=rfOrJ`XptU,Fhr]l->Jo o:B|' );
define( 'NONCE_SALT',       '/-?mzquu1>mYK2{>D> 1,NADPsQzIh@V3ri{:5ApZIR}{=ben.tn@y.g8}]KZxde' );

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
