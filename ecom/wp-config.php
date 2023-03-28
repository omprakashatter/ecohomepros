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
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         'K%=zJ,b>)F~UEJnYltEp c9Z9GX<ixy/U0vzKM8hiVrSt4*`r@O,q#JQ,{zN~Os^' );
define( 'SECURE_AUTH_KEY',  'I`$d5n[/n#UeF6g<pbz1D%*A3FLyY~WHYNhj)P-<Wb ?^-R4qRcLDm|g6t7qyNs8' );
define( 'LOGGED_IN_KEY',    '2}ThlX4l_4h*,v{yB;]u`Yt ll3l!bC,v?n^xN:(}h(g$NNLKq!cSJ_Shog+kA+^' );
define( 'NONCE_KEY',        'hJ~ssPwsu~^ng #u!2doIUd&n]9{C3q6s9]0>Ty(_vpB>c8Ni3!B=|)@uczKC1!T' );
define( 'AUTH_SALT',        'N @fnxHB.z6[~$ch_eZS(F;B3f V~/5r0T?#D~+2xI?4;`{6A(5$jeX{]S1x>otE' );
define( 'SECURE_AUTH_SALT', 'Q:(.VY*Lv=^,DwTd+#)?h[eUSu8L6J=XY@bCoLRdn&fwN0r?IYSm945Nn.mcI<+]' );
define( 'LOGGED_IN_SALT',   ':xf+Gz({K}*^n>Iq4B28T8o]~sH7)%46>:pZ,+G~Q&)Y _GprkGHCb0J,va<M<(*' );
define( 'NONCE_SALT',       'VTBiCTj1hF[l8]-(UYP5qV7My~9VKcy+Zk0=e{j=^{EOWIouF=jkA8LrzyWL-7$6' );

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
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
