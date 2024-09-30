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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '5c[*t,@rf=QMBW<ZpS9ohu=hJQctpZJf?q>!yboyY]&!nQ`GGyvaMi ,?$=6)Tby' );
define( 'SECURE_AUTH_KEY',   '/::)X<s,O;XGme^<No&r Y[aa HAvr}0g_js{^lQ*BD_VG}`VfvG1`i<9v=vDYox' );
define( 'LOGGED_IN_KEY',     'w%buguC}BB+0+?lt|s}r=88P5_%L.sdu=x9Alot?obMn~Qx_Z/@:F~N-7WK{W7@s' );
define( 'NONCE_KEY',         'k60^xAj;RG)RF!7c+wW*u0%|:2^G:j.wv,$,,q|@QpMEGw:ch3/>,,-3_SJD6bg5' );
define( 'AUTH_SALT',         ' Rs@tQKrf$_z?Ae9l1_T5Hw0`>i3u*sG8/`I1,p]^Rr^%{/6Qb*[`bT[F6T`N(J~' );
define( 'SECURE_AUTH_SALT',  'wMcuWja7kkeE54oZ/XW0dS>i{cGYVJaJM)k.VYIG+sA57aGDs8eyjA_*POO5s{>:' );
define( 'LOGGED_IN_SALT',    '*b#p4cJ-TP/R/P[]`078:g=ELHuPXHL[O=Q0JL~x+!k]1:,Wh)9<Gw!5%h5F-Dmm' );
define( 'NONCE_SALT',        'nLo-~iV||a6zp|auP+`qn,p5OIYs-8FR2!9Fpm)_31/0YeI_I>]$zzbtUXbwivsZ' );
define( 'WP_CACHE_KEY_SALT', 'MHIc&z{|B/}:mbKWbxQ^aig!a=epYW_lL r=OCjHaFh%h`0Bpv$oiFndp`gFvc2D' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
