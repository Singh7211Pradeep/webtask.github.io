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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '.R>a_A[` gr=^*.lOrR[E%=1H[=U^.wvnC!G#_?NB!U{4RR8R$!ZiabHL:KIEFsd' );
define( 'SECURE_AUTH_KEY',  'dh ;6JpuEd;aVO.;N~@K+8Phb[2HmHh5E:0HQf1I{DUZv4l+f=`?j-Cg,=d{I2Y0' );
define( 'LOGGED_IN_KEY',    'f@.;mXl)ok0n{VcO!:tSkt_>+8Q6k-``JE-B@r)OTDJJUp*{eoEOW(}K|[xY%hjd' );
define( 'NONCE_KEY',        'I(J&*I,woE)7W/]/GC55#)QWh&$w In(P7&N7j.xPnY$ZZ#JR+M:`Z;MT,XrC`qJ' );
define( 'AUTH_SALT',        'W2d,yaP*I]@Az*g=uv-eAwXACY9$Z~7=Rr2B,PJPQw)#|zIzIXeV5.F?/aJpE;OL' );
define( 'SECURE_AUTH_SALT', '{.;M8M!h/f)|:KL>t>89U`;xALW5pn3f2-A/ix)!_$j/,O}nCd]MLV/>p (upwVO' );
define( 'LOGGED_IN_SALT',   'hjaJ1S WPiT?[F|UHGR`M2By1;xPCSvD)NLYil^Z>2z7`Q.~ImXY8{gqae3zk!1w' );
define( 'NONCE_SALT',       'fH8Lge s{%p+_)L>Co>]H<R$[b~,>~J7v%gNMs=~`Nx@s~2F{sxP]KaNn)jEv:(9' );

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
