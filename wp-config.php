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
define('DB_NAME', 'wp_coolfire');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^^gEi~^TlMXS<A7#Px#I6q(Kope`xr CpjK1H5TUGd,H-#0n:%)FGFyRi4[y`PT>');
define('SECURE_AUTH_KEY',  'b$G|0z18Qt}Yo/>a{T6Q64X{%WXg?sF!)z@R`b8sb#fnWvcT#_F~RE2:Y@*M$^8i');
define('LOGGED_IN_KEY',    'i@0t,]N1Zdp;len$;kyl3#&W,UV1hn~ovp#aM2Lk}b#LRPfA!=x(z;i:9,ryPYnb');
define('NONCE_KEY',        'M]M*1UK,PXQbhJtnTv7g&JD|DmE+a#Y)NX$u+ypR7F{]lUI/25^3H~}d3q|&iX;0');
define('AUTH_SALT',        'F.S}NH@]q_4cz(d))E<*e]O|Y*#bp(yIHn)z.*I$IqY*`_E>(Y $<MYfU=4Y`wlh');
define('SECURE_AUTH_SALT', 'vHB>SyiW)J$ZcU_]{]&f<%}&W[?YnfxMN#htS 2Ee7Rui![GkuRoO8P9$Gyi<c&0');
define('LOGGED_IN_SALT',   'T2=y@M[jEgjQ~6P3K10h_?0B[d6=>,;6`k&mJ}>PFAJ2YvQWvci%hh`FFWHF`gfl');
define('NONCE_SALT',       '0FSA;>5@kD1ZPgZT}#$?!QRxD~lej`=5REkwWI@#Y|3d]NrE!AEwNl=R9@gUqT`b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cf_';

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
