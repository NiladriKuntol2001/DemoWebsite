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
define( 'DB_NAME', 'studyabroad' );

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
define( 'AUTH_KEY',         'f=B S1b;B{,Z`qs#wiNtYX p+N74J&t%<,-ie]33%2M_ndAxk^<*FdY ;&O: L|O' );
define( 'SECURE_AUTH_KEY',  'K)D);Lg#,vD5YD]PP6Zb)75S(O^l1>-dZ*/BU~Y^Fs;u0Oi$AIjR?, UfvTRn4>&' );
define( 'LOGGED_IN_KEY',    '(iuAFtj<hUePhnw*Y1s{2=^8o7zM)e6=2EPH7ExJWL4+UY]JmY<Dc)^Sh-xT15b(' );
define( 'NONCE_KEY',        '`I6o(oEF8.d{Z<U-DN}mbMy19f>6=%^26eUE[iqx(;u~C$2*:bc}@6`Sy;f~F]7y' );
define( 'AUTH_SALT',        'm:KJ4,uwJXEv4Woa&^^xT[v[b=+3$ffR1 I[y[13v06%%KS{34DR,*t.AEq:S/c1' );
define( 'SECURE_AUTH_SALT', 'u[A-_jZGHN:tu-omE@mv 3wqGt$ORDRgi_Aj2|0E6F|u$rM.IYUQYvUFx>- m=AA' );
define( 'LOGGED_IN_SALT',   'A}PZ_r;M(Re,$iS(9v9y*Xv OD^b6 YO]!u>YX!z+R9iH*H!{KyhQo&qJ;s,Mtyb' );
define( 'NONCE_SALT',       'DiOf,~wJDz/BCR|D?,,0]E`)S**P% wO`ML<zpkf=f?)k%_PMZ1%aqbd9F2V&qs4' );

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
