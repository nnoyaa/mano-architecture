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
define( 'DB_NAME', 'mano-architecture' );

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
define( 'AUTH_KEY',         'Y+1?dX6LhtKy3sS_MOa=.LBXG/y)%Q$IrT4DbR5z}hS A9|1__^F6]D)mGDN0OvH' );
define( 'SECURE_AUTH_KEY',  '1@@r EW~QBpbhXI=nF5B0~&z^Im#[U[u-b_WA9nGxk5,eFYVjY<#1[mGES9p5_5P' );
define( 'LOGGED_IN_KEY',    '(iN1k|i@Gcou05M#gM /lF.jk|U!*gvI&(XWU/4M@lSecoZ{4OH/)_0dAdbbRyd&' );
define( 'NONCE_KEY',        '=#O1<spyq? TFRL%:j:|f9rIjz(rpVDeL+~d__eJj;o%l;iAH%woO(A||+dwsq,Q' );
define( 'AUTH_SALT',        '3O`]({1j(Th/EDM2(K&E`n#/^;l4]0xghseqYvA94f3&`_&0}8wd-GFAN)Jutd0`' );
define( 'SECURE_AUTH_SALT', '`}#j0PvZVyT*rYB!;[}9+w2Wq0+h*3HDHAIImZ=9[p>ohE2l>Kh8*qJ67]9s]~8=' );
define( 'LOGGED_IN_SALT',   '-/cg&9B6kZq#3F6&=a~W8%Tzj0IJUwm 1*s=`wlcWkV0I8/Xx$XpW7q@LRW4!U9u' );
define( 'NONCE_SALT',       'dE%y4`)&e_BBfbrqWm%v>n8^<CPHGK]oM{?j?Tc8*C~w0DK19-)]ByZ{dnuSXwZ=' );

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
