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
define('DB_NAME', 'thordb');

/** MySQL database username */
define('DB_USER', 'polarnj');

/** MySQL database password */
define('DB_PASSWORD', 'nj07067');

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
define('AUTH_KEY',         '*LqKC%ab>s^-ln-+q[fBNMIz}^@pQlVmUX1L* Ub,gxnB[~]VtV$C4Q4.BrL`Eju');
define('SECURE_AUTH_KEY',  '$@OII9N68,PfGhHY-1,1gaPq0N4qbQf(t3|J9/u|qeR6FgXK(!QCG(c5bWa*4Jd&');
define('LOGGED_IN_KEY',    'Q_62^/6 [%m%unMNgy$6;>[zXbe5~B(q%yoNLAn7Y4ss&>kmH+s!wd|4z.6]18$0');
define('NONCE_KEY',        'GHKY;}y54=5?f!Gj]^e?@#WMd<YJ5-{`whd%iAh[r37k{0r3+jDzeON(Lz0f_3%}');
define('AUTH_SALT',        '?.SD-@9AMhUxq]0i%bGs=bO+*IYk*QxB;bYRUcT$Y#(xH`1Y7^>S^k/- w#L>(yw');
define('SECURE_AUTH_SALT', '43.x4aX5xzBc M@tL_%sk~[~EQvvpbhPvBkv;AP=~{-6Z-=ph_AqW3J{A;~%8Un|');
define('LOGGED_IN_SALT',   'q8F%X~9?=MYqRxlGW*-b,pi;67~zeg(*kaT*8GV%=1{RD)+~U%eq~qx4gT8vNzm$');
define('NONCE_SALT',       '4NK^:>BIraI_wc{Bk-C!vvju<l:^tM7f;Z7o}e0PDRY$E)5Q8mo<I=jT=RFW]ifr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
