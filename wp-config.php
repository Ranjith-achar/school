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
define('DB_NAME', 'navyaschool_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ranjith');

/** MySQL hostname */
define('DB_HOST', 'localhost');

define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         '.%l[+r:Yh_6Rzg2R[ 45]Gl_wL%nso]lH|OXo$K3>1GNEgktk]}b8bFZj3w5C7Ze');
define('SECURE_AUTH_KEY',  'wNX]=z<QBr.ZZzOFGlCKBhU|@4WsXy^o4`:noJ;q-XU@UC=gQE<9V9-]13<)X@}J');
define('LOGGED_IN_KEY',    'brb=&EUt9xN.)EzfJF^T!7t{7F;ggjO~F8M#$o/$;v!~kMWtE$w}i%X;o^Ujf!xN');
define('NONCE_KEY',        'xJ!$</h/2R{N_FU9rg[g#Y&jVuK}D<s1*aW!=,q<RYU^&}|CyU`m8nU-C5I}UxY=');
define('AUTH_SALT',        'qaQ!x`RoTaW11{o[;-m1=,-G+&%^@@*~D^U@ B+R$P!P~?$|9w7G8^rJt$x89:b0');
define('SECURE_AUTH_SALT', 'sxBlmqRB?3P!<g%Rq+1$ntg1jsh<{*{hB1RW%$]v}C+Ah.R^Sh,a1p)VptErh|(t');
define('LOGGED_IN_SALT',   'Z}Uess51Tf/]q^/OF[|YOqj$OutYrM<UwpGEVP|fl<?L_}Y=.cD/8Ww:>IY+x<:Y');
define('NONCE_SALT',       '6>WMp0)a[#..{odz %1M~riog[BU;S||<JI,<CsZIvZig;u^-gOwe_yK|M>$jCo4');

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
