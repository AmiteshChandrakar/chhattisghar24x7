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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cgnews' );

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
define( 'AUTH_KEY',         'o@EA{/f6Ns2Sr@[<L6zOn5SzuY_JdpbMY@q54Ff6rgfi#?^Rwa^/<$0/m:gtCNpT' );
define( 'SECURE_AUTH_KEY',  '(`iTc>U=BX9]<p~>(%TrX!F%[K-[C&~Qpb,gSoA2zSZzuDgfz6;w.>I4kOGucdmK' );
define( 'LOGGED_IN_KEY',    '_O6Lc!=Q4(KcTD(:N@p;or@eI(6`kR!tw$=V!x*tN648ZFs8XJ{38&vbx=`3JNCf' );
define( 'NONCE_KEY',        'a-^{JnlY,Hb_Fs0Pki2c.(9:hg+@fJyPS0I#c-``3RloxE)FuayZ^_m+JzPR+$w=' );
define( 'AUTH_SALT',        '(bv#L#CQ7+XY%@__gk<%F<Zie,JCPAPnMm*d&;+N.`m$n`34I%}z6l~<DG.lvr ^' );
define( 'SECURE_AUTH_SALT', 'YiRN_XMekX8HxafC$zB5?c-g|{RSxMZ3xSdZ_7+}.Fci7>rZyhiv;(DIw5QZ0eB ' );
define( 'LOGGED_IN_SALT',   'P3~Z}PB!5+9+-Of8>3CbdGh9`v>Gj&7.qETI4d;c0dU1q!NkGUwGc=%qm1@=eo ,' );
define( 'NONCE_SALT',       'd+~Yow 3q/!}+N:a:W-a=vN<u]*?v_|#~@Pf)bp<!Tx2>_a~,Sh>St!KJt;fXNO:' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
