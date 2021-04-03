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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'DVf*R]8>; Yp]f9i[M5wB:G}rv`B<S%Rr=L~tQFPyEO-(Bw}$rrz%1:qwRA!-W0G' );
define( 'SECURE_AUTH_KEY',  'PNd{GK:_fK&3|)+:?42p5]ZvA^]!se`F1Dni&t||<BreRbxwsS}R[=,.y9&5q#_~' );
define( 'LOGGED_IN_KEY',    'mhgKJb|MEs,&PuCdLeI{A)W_,HbA94>vlLI8uM5x*l89]@wr5pakeO}q2K3HZ39w' );
define( 'NONCE_KEY',        'rd#d!a6:R5vj=0C(?%M3Yzgjif`~#-#m?@2Ah| RI{9= K|+##FEd<h|7Tac^AN~' );
define( 'AUTH_SALT',        '+9NtH+9c_vb$|{$uZxpcI^T8~ #AOyF2j}]JS3QlYJISnau4)d?{<h<Im&<hnjKv' );
define( 'SECURE_AUTH_SALT', 'XL<9?,])R8(dL^`?aKIV{2V$:7Y_Hol[Fqs3W<H=Yh#8Zi6[3 &Ms~vB7ZVg6dXu' );
define( 'LOGGED_IN_SALT',   '1->S[n%3.tA/rl*4oIwr&[5~iiQ/4F4x*_sMzFhWKs$AF%:z!#vj>!yfl3Em^l3D' );
define( 'NONCE_SALT',       '6[^%5~xu&>rbg|pEXqT?UkAQVsXcP~v;pZtC-Y|:N239 j[bUGP[S1__qyM`K$v`' );

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
