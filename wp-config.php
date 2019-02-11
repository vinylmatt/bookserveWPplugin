<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vm_wordpress_plugin');

/** MySQL database username */
define('DB_USER', 'vm_wp_plugin');

/** MySQL database password */
define('DB_PASSWORD', 'vm_wp_plugin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.<EF|KeDe&#h!^.]3I~{ca8Z{syMszSwjGuP{a8`*|cVHc<0|<tpz?57Q[Qx&/bm');
define('SECURE_AUTH_KEY',  'WZc&6G[J~p~NE9d7Od|xbjxQm@BUz*BzN_`]WP0IE;TU|a8Jc^Q5l:w3Tss?J!#<');
define('LOGGED_IN_KEY',    '0+:@jZ+#5X#R[xkZ<P&6f%1k-|)Z55aZwQFcWpSEmNp:>^;/)ICU?rWV*VbU?}D1');
define('NONCE_KEY',        'jx>!.kRb(p6ZoXMQ=o|x5tdn2<|1bRm=m?^nneq>C|4bZ-f@<PQc/vc|R*J/I2y1');
define('AUTH_SALT',        '1_&n`--Ch9$5bm*HgaGCf_$PNZ)!WGf`tl^TPsPzmoakyIig~JJ>UWH7_Ip-T8pE');
define('SECURE_AUTH_SALT', '/HL+/|)1of%i+=VK}[+86l3hC<D}s6(t/c_p/w+X=C;poKs`<7+LfGNhx%IkgVFf');
define('LOGGED_IN_SALT',   'u}<J$~@?QN-k *Sh-oefbbT7`&rDSA)aN0/u[5w-iHsQQSp5>%H8?L}{#y-d^!b!');
define('NONCE_SALT',       '&84y>JrJ~[-W<cZxbo/[*k~nJu4qdi&MF:fW~bP9(-Q7&iVOT/KRYUk|NslPoW-}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
