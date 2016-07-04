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
define('DB_NAME', 'db633688595');

/** MySQL database username */
define('DB_USER', 'dbo633688595');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

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
define('AUTH_KEY',         '^{Zv~_de8{i5Dm^Nt3?R,nT&7WijqS{,BXZ#*b#nHxL{&ff2%0sr(Umsw!<.1k u');
define('SECURE_AUTH_KEY',  'iTYI_Rz47lQ8po,*v<?j/.b$le[Z*5G8@EQdMI3o}@O0(1mZ*9>7JcOz]9aGfT<H');
define('LOGGED_IN_KEY',    '7m1 AUbK1Cik&(!#r2z,|A<7cY~@#[rWXmXfo:v$REE|0ICg4Mm2xi.Q,Yxw@qw>');
define('NONCE_KEY',        '!=m`UM;IM%`KGRyB1&b<}ix;:F`|2:k`&9*Z5dVR~G@0BaoGXn=?vM6,e.^4KZgv');
define('AUTH_SALT',        'd|s>cn&2HJjk|f5!7CHD55&LG;*?H,km?XHws8PW@FjsjJ@|Lu]TE@D(Ev#<4`mP');
define('SECURE_AUTH_SALT', '/CsFfgGB*k_+5nyoGFtX}$U*)!Pl%15x_<(S+X55hBo5,ry-yw_70i9(og+ybN%t');
define('LOGGED_IN_SALT',   'kuRg-_;HtI,_{c{b* .IvFy!84wD`iC!0XpiXm}0e4i8^U+-QEQ!j?yWfzC/y+Y!');
define('NONCE_SALT',       '*xHVSGo3OQ-Xc>cYN3RCZbn#q*,m+P3!tnG8cZMA4jlq1`_k=V[2&agII $xOZo=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
