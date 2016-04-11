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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vooveo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'I]5B-|HitoD4nT^l:QDXKeEusl!F0T$N7d~]Yx!z-svSHHg=-HK,(?R3ZB$D:6hy');
define('SECURE_AUTH_KEY',  'G5RCW[]bLb[}_<2BP0,$YIZPoY1OV,C93Ho(7ssUr%rgV6t+Tsi?Zm$J.Q+4D{/N');
define('LOGGED_IN_KEY',    'lJxjfHd^ 96D>!|Z#u!<5G1I`5WqNNASfS5WU4+qYtua+V@f!Q1pRr^PFP9i*%wJ');
define('NONCE_KEY',        'KtyC|V9@5* ~-Nw0Qa LXJy:VP07O8/[#daq!k0 >N$q`rF19[|.,PKZC}8RFM=S');
define('AUTH_SALT',        '|Ax|t:Rs>d8!.?5omldy?zunF[.~V+~|nCi<l*t&b x8MKTqQ(:_P!+vb>^oMbU-');
define('SECURE_AUTH_SALT', 'S(KeIPQ`EN}B|-UMf$<ehD1{o#)Od?W,4%1)PA>sFjIzq~DU/Ccx;u55:.2fF?>w');
define('LOGGED_IN_SALT',   '`|){5b:hHCK*Hz] .Z|i|kDVhlPz3H3v?Q+TeG9T+GD(q9@h}Kh7h&.h_y<.~c3_');
define('NONCE_SALT',       '|QG^(XG4Vb+HM1whR>(CQ~M7PUF <{1UX<rc5-9;9Bz@ntMA)+Mn5eH(y;m7aq$7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'imark_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
