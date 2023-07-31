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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root123' );

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
define( 'AUTH_KEY',         '9.(IKPT]<t/GmkG2A9#WXsB{1NZY.C~ }cYrAEk[AYb24*dIm_N+WT6)wt>kNoPO' );
define( 'SECURE_AUTH_KEY',  '9fJ1P{~E<A30d?w.Ig|fHA&gfC@a0)!GUh%vBf7/P=*47#EbkorUYH3#Qz=d#u{i' );
define( 'LOGGED_IN_KEY',    'CC[N&,0~YFSe7m.cm>e0C9dC)g|)71;^HV)l2P7|&=fMkJKui)D:ZvV90Vc7H?XS' );
define( 'NONCE_KEY',        'xzAR!s4[8P-QNaYJR&#P,Ws1na(Sn4k71{:EOg T5uNH8C|QnNfXr z_<IGs3084' );
define( 'AUTH_SALT',        '&q5$i6t6k/SJT< ET4_!0uNkAG]=9+UV,?U;EY|Rq#-*2 UqGlsW=}7[{&B;1dme' );
define( 'SECURE_AUTH_SALT', '!PtcfqQ)F^Re_NR3Eg-=<U5w,qF}ew)j=LF}A;u@sCzc0.;|$Bt&Q4%Mo<{@&[Ur' );
define( 'LOGGED_IN_SALT',   'p0nMm|$a96><}hYt[HrrO&q4c/#S[QHWf;5zS@y0^.A.O:M==j#sboz+ng92vIx$' );
define( 'NONCE_SALT',       'atE+{$uT w0 ?O~0abp]zoJFlhw0}PnTmG-m;[fT:jta&-GdECC}[8{eEpx%>k]o' );

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
