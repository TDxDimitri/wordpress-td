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
define( 'DB_NAME', 'wordpresstd' );

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
define( 'AUTH_KEY',         '*sP3>ffs?8N9Y0.QK7AG7J4l(yKywj7?[;)(?X`Cc,)uzm^Zjp;+.SjXFaMq<58,' );
define( 'SECURE_AUTH_KEY',  'S,Y$kO10Gv ~H`Jqbr=K!dO8vVzK`%8:`WNysPwUp}LN$_yyTWL>G;/sADTv?;m5' );
define( 'LOGGED_IN_KEY',    'CVW;MLGY+S`Vf }$<8/gtxY- .8WSQ%u;dK%ZNQ,kobEJfJo{x[rq$5PENekk|xD' );
define( 'NONCE_KEY',        '&ZT3FV5i8QA8|68tH*Kpm/T]Q Mg0<G.uc +i*k_D7PzqpG7v0[z@F}kZkGUsl^-' );
define( 'AUTH_SALT',        'FN`But#1j$pXle)pl*?Ru?Wsq/Jg`z[])ZzZpJYH%W1ie!}u`is(8C,pZ.,{vTSu' );
define( 'SECURE_AUTH_SALT', '!~[h{hWX@Q8U&Jxs0q5f=zGcmn(&AqT#_p77d=!]oM:f3%yFqrq)xbr:{ &e(&pw' );
define( 'LOGGED_IN_SALT',   'Q{+s(>+edwER}~(I^Yrp`#3r%=I<^2@|:SYz2jD}8C~Gye-|*x!m;UCt70CZ$7=d' );
define( 'NONCE_SALT',       'lf.IAW;OLu.U.[H@.^i115]l.ToI3LD}{[g)iw9:CTufFc(tYDdho~0!cT,0pP@`' );

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
