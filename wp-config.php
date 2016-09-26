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
define('DB_NAME', 'look-buzzdb');

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
define('AUTH_KEY',         'cT>39/|/W3*Z;P5Ghq#br_;=CX2nWO/ t(PKZ@Y}OM_Cxp7jd[?{4:5J+[`9!#%T');
define('SECURE_AUTH_KEY',  'Anc4QDlYOBl}~2|L ^30^eusoba4k}B0MpT9vQ@+c}7z`/xI[D_mOtR7.BZ7e]U;');
define('LOGGED_IN_KEY',    'JdY?opH%<_Y|K3 T|,56eQ7+ ?5WN9-+q,pa;$V)FdDveVdREg4x`F%9>hr0Y,3S');
define('NONCE_KEY',        'gw:g{gc7[H8t}& Xc57-7U+abK+XO;=N?+;V)/H}Y7^`>~epD8LqJ;Wf41WC.$hV');
define('AUTH_SALT',        'lUe=:0QLhEU(1&ZNIFR a.sB,M5_z}<biT#l5kDNrX=X>fJ`qqRcl-s-v`m<)(Ng');
define('SECURE_AUTH_SALT', 'o2`=[wi*z,S.DZ[?=ya7L%We(^?NK>RYidhy||:[1z^zGui2rtE_$NOE=%3^Vs!*');
define('LOGGED_IN_SALT',   '=Hv mV#TPlGYvlaauZvVBU1Z2CjO@hTgYxYq2|7hd;CYP/:u#Xh8Q1-{,#4oCC9+');
define('NONCE_SALT',       '2?>y|l(lit7VABNDrHwUu~=wyU+GPC@x[=-pjT342%Zux Pp,zmsPZv_OsT-|3Xf');

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
