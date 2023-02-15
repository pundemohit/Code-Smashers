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
define( 'DB_NAME', 'pro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '?I7oEG|6HFY9:p^;r;J- +HZPG[*;]B? `LpkE-7i)whKgG|<;I:qMG]864$<mUt' );
define( 'SECURE_AUTH_KEY',  'sac0)0j,mZNiA>gtt$U$B+C0%bLx-2:Evf|G%)&{*+oTUWVsa*N&1^dB`[Z9sUBE' );
define( 'LOGGED_IN_KEY',    '&1@^C}=2Ff:IFHF$Ukh?-,O@WgTZp9*PX_ZO3k9H$TL4QA2I27G.hUuXIpwcnv6u' );
define( 'NONCE_KEY',        ':ZxTp$UkE1*Z.@5[$3#6XE^0dqp},euRa2v+){xK7gXqXXmro((*$kQ+ZSPMXq-W' );
define( 'AUTH_SALT',        'mBfUB7UdYSB$/ee.E9ZC/m_!TFInV]E1DkwTW `-<d2|QO}?D1bl%~I>uHJ9.=^u' );
define( 'SECURE_AUTH_SALT', 'Yc//}wX2`;O=#<k,+Zn{j1EVnI)[/H>u=s`H<r`jXo)c}3k5g>FXV4%.fOObj3$)' );
define( 'LOGGED_IN_SALT',   'ZAwvi=J@HJ`+]c{67:>0g)P)2<P/^wh-nMW6dX9Go17NshCo^SH(6F6[dtXh-(TG' );
define( 'NONCE_SALT',       '?=YbEG<{FNzE#bSt^Ry$^^>%xMkM-~3uy:`J${ut7{H9WxE<3xo t2KYpZ&cRHl0' );

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
