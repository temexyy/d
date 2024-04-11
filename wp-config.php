<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'bm' );

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
define( 'AUTH_KEY',         '^aR!P/`L3KO]WJsqZTFi@pY!&hj4kL/pd`KKm()O,wd96sD^c;us8^d,sy-!wmV^' );
define( 'SECURE_AUTH_KEY',  '`!9gRHPj&nlr}_#G(t1F`Mn|!95g^<C3G,TP*=eFxdKjEx-N0S$24FYE:0zC{:49' );
define( 'LOGGED_IN_KEY',    'KBi$YG*<rX UamTF! pCgWhRRD;4* t`y<Ar:2e?Zl1F`vP{w`3Ghk!dyp;r3znm' );
define( 'NONCE_KEY',        '@NrebwNyj18rc|<elsL%;{o&oB[FXRH_YC8-8;N0ro{pGI@27PK^FC-hW!55-b&:' );
define( 'AUTH_SALT',        '/R|O% uGHE|R~wv9GHJ+Kf]g`@[mtK3%L&1D=c*+ofG]qN8jf--*{IG<w$H>il1j' );
define( 'SECURE_AUTH_SALT', '9t2?{B:=#1a%S}kpIjtlo9MH29Tau`[-EguWr8G%v`B(9<NXKmE+P7DLBUIV4*MG' );
define( 'LOGGED_IN_SALT',   'BD?=j.,F&(&?6uP-BBZtBadSj4,$P`<3qKk7Jie 9b$w;K0{EsMSkCtDIhPFGlHs' );
define( 'NONCE_SALT',       'F[r+]%H)k|ow&y8%7Y,d>-BJAVdDXr}}UwkZblW@PIr@6g341NN_k+MYj>g^*|o-' );

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
