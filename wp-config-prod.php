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

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME']);
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);

define('DB_NAME', '69w01dave_database');

/** MySQL database username */
define('DB_USER', '69w01dave');

/** MySQL database password */
define('DB_PASSWORD', 'ureqydahu');

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
define('AUTH_KEY',         'sM:bOicQwVZoh,ca=s}4^vB]**23Mm04-BV:3dU=!v;D?.{mo_Sh%V{H<2bOqCML');
define('SECURE_AUTH_KEY',  'wJ}A/>d5zx578#%g6xhWf5*#`uvp/-oi3{f#y~RJFzK9f*P_cl]om#j-D1V~H./.');
define('LOGGED_IN_KEY',    '_ok7A2vF,`1dAulW$VqJ8zGMFz;:@VD:*>XwgFN7J0A/Zz>wYlHj$cd.1ZsND?US');
define('NONCE_KEY',        'Ti]55IXcd<NM9$(-19D>y?]CI4:Lv^,X!hruv~:^5L?$sUPO/&(6ba:ZJq}9`*={');
define('AUTH_SALT',        '~UHBC`K)_l>nUk/qYx:O_rdx3bkE,T0h_51fFM]_b>ILs0$HzHZcOhU*IeR~7<C`');
define('SECURE_AUTH_SALT', '`R-N1N^A0#wh/H~hw/:-}BoVZD2!!OcHhdaQ=#B}fLj}DSsh2D oCCx0jzn>MliK');
define('LOGGED_IN_SALT',   'z?N,0b?{/TtEn.QLrY[Z48k^pR~2Vqq[Uf/K(Y3Om(}N?`Y:><cDSzE 26++i/<7');
define('NONCE_SALT',       'k[@/&%9jTNOw&(jgof/{]u|{sak5C@*,xai2FdV+kUnZU5Psx{=oo9&6ARM,/:L(');

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
