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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '1K%#H8KXY*D&%CmVhG_pA&a}+Y+{j,*%2|noe^.zHH$4v_q+PIwTm`-LXD9:3A)+' );
define( 'SECURE_AUTH_KEY',  '=ynt|7F^wd5UA3]5()`{nFa7q^i[:jp&u7SAn1n;>cUkzw=jGd5p/d{i_pMJR&TZ' );
define( 'LOGGED_IN_KEY',    '.b&R=lh!i0TYJr;z>[m+QK^^~]>6RGX*1lC[JfO2G_V?@OD<QUEoYfC9C8<Z.7~Q' );
define( 'NONCE_KEY',        'doNxbyfye{^RTqW|+F8T(bOjOh4aRHqU#X!0d4_}x{;RPLXor@,3&}B~:UIbsPA(' );
define( 'AUTH_SALT',        '#EF_, SnUGUu;>OxBdnm&z:n_/gBqM6Grhpq>XuQD)!j*$}nCC*L4XAf!S`rS+Pg' );
define( 'SECURE_AUTH_SALT', 'J:D[tXWiT4ltpo|u`s( ;~WKs!MrslDdy$)NZDM-&[JR(+j(w6%(f~`UZ=>j&nXf' );
define( 'LOGGED_IN_SALT',   'V-%D4Y -70F3y:c;K$YIt1`g_wb=qg,OunXwp%#+>&L:|=NkkW]@<$2@s hQ]cDd' );
define( 'NONCE_SALT',       ': W% Y@G0`keSeyq=>b39zs#5]})5?xTCxVUq|_KWB:(gDHK0RBm6>^w~QG4#E6n' );

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
