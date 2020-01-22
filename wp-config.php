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
define( 'DB_NAME', 'roger' );

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
define( 'AUTH_KEY',         '!Y(tWbwnL-b)f*HE&4.bY*<E`|34*yS $XM4*gv5[K=[?Ymbd$A[rJmRjRp8zUFZ' );
define( 'SECURE_AUTH_KEY',  '< ad1ezGcwo)v`GxzLrxI?GNRTCu(wQr,8sT>y340{LUB|vj}tI}qy{z/*@$J;0j' );
define( 'LOGGED_IN_KEY',    'P)$GPBaoJ9KVIM$BWVCl-7v(Vq_5I=wj*z^D3:{:SQm#3,&{yF?}:0_g`0n7~,^<' );
define( 'NONCE_KEY',        'f6^i2Rb;q}.c;TCZ[|n}nd${t]Jqb 0%eRX.7z+7(fb)&SAO~b&hHk7iKZ-:z&h?' );
define( 'AUTH_SALT',        'gqA1{wY_^fIaK%<:e@koRAvyr]!II.>24Z43oDJJ;%E%0BrvMA*9aoZxe8~=XagZ' );
define( 'SECURE_AUTH_SALT', 'B,-,{dRq,Vj.jX9^B5m!aXE`hZUdG^wxQb~E6<jPXHB@;@H^/79luV7<.yP%s)+z' );
define( 'LOGGED_IN_SALT',   '&:7^m8Wd(o qr,Ng/P4nesQHrx&mKuE:9M;^5cM<H![g2QJyyXLE@^*u.qSWzce!' );
define( 'NONCE_SALT',       'f@6}p7fkehxchrIqx$Xu/DuQIP[ kLy}|G?kl=}{&ZXLq5Zgiz`tLxuGPd{8az;I' );

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
