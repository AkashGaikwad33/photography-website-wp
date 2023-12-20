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
define( 'DB_NAME', 'officework' );

/** Database username */
define( 'DB_USER', 'admin 1' );

/** Database password */
define( 'DB_PASSWORD', 'admin@12345' );

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
define( 'AUTH_KEY',         '#ujZx ^8@d[i[C7D#GQFNvn%$fM0l,WIk^TGZ5>v%i&*87PNQ}9-qsr)dDuWZ;cz' );
define( 'SECURE_AUTH_KEY',  'C;eXN@Zpxw{GJ[rc@5Y34Lw#t5IQ6GcLj#{r.^5f8y_{omm 9|EozMc(]D*<YDM!' );
define( 'LOGGED_IN_KEY',    'ukq/+EITtL]3i @DEHa(Gvt+shQV0o0N,a_81>-1/)cBSbB_Y?la{DX0C://bERW' );
define( 'NONCE_KEY',        'm0!9#EvX%0^Dab3q9lJN78 ]AnZCoPc+[8&IzLYf^x>r!o+w9lHw]M<g;u0)_!En' );
define( 'AUTH_SALT',        'K9m@$o6!B2$8r^LZfNhB2reekKugg6X~Ax(jYn>mJo:L&2n~nn66OhMtkqpo6[@+' );
define( 'SECURE_AUTH_SALT', 'jYAp5+(d,]ub4d=k]2019f5FV|?hO)QB!G!A@T`V|HhVuSgxINe*11E9$D#JNiH*' );
define( 'LOGGED_IN_SALT',   '|)(<M))c<eBqfQ/K&jZ-48}F~]hmOI9L=u4`kD]bfkAj5{tLxD&erTLoGmVs^K39' );
define( 'NONCE_SALT',       '8P}r|[i&(Qxj`hFB0x6i8LYW 1)Le::C*`El.,z_|`vkam5<8D_IEjg[smc/&=-,' );

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
