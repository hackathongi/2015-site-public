<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wallyjobs');

/** MySQL database username */
define('DB_USER', 'wallyjobs');

/** MySQL database password */
define('DB_PASSWORD', 'wallyjobs');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '?3%_L|Lv>X8 H#r#|h_*bi#z+;iM/!!mn{z|+x:+/lWZA-e>a(?9^9ukGH%GMhS`');
define('SECURE_AUTH_KEY',  'p&XJXu`,`DNksu+X-y`-[:I}P(7^p7Cw.HAsiEi<CaU{Enu||[| XG1>$p$D<Fr8');
define('LOGGED_IN_KEY',    'LfL<kjaSEZT4Zt/:|3`8)&R!&Bx|6vW_7tJ_,{pvuiHWri,|,A12|zKS_[2H(<,A');
define('NONCE_KEY',        '*N->|(t[vot1HfDe+/%**|W:~H8.NGji0dnDeD|!*M2k &H>HBtyvWK>fV*Xmp3?');
define('AUTH_SALT',        ',*3<h$Js9VM1>@&c?tCcDE=NU*h5S?nn@7k{rd)*WFA]A=,FC!+.a:A*-#p:Abip');
define('SECURE_AUTH_SALT', '+OO-&0cY3sb|!Scs[u;EC-Rd0o@_^(0>Ck`Lm*J1xgPp|90B$l6EWP0G<e$$Z+&A');
define('LOGGED_IN_SALT',   '!2RcIt([3j*z;8)dt2WI4d_}]$|_S61n4cYx|,B2 &^aAFPoNt;as~xHVEFNumC<');
define('NONCE_SALT',       '+Ul,;[[)9-??C5z<3aN>isy~2d{./t[M+iY??x&i<T{G-F|X|-le3V}D@*q/V{>h');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
