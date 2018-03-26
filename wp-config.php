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
define('DB_NAME', 'myevent');

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
define('AUTH_KEY',         'BwD`N V)~N0>75qWAbSM:f{O/!o2g4 )8$<Ty.+[f4SW#Hk|U<Hr%p0^.u7W+CO0');
define('SECURE_AUTH_KEY',  '_,<d;>@Hc~} 8MI5wZ/6$~~{7GZfC..aJW>)|1&qmA*1T>c>_~%i(F4GypmT/7iQ');
define('LOGGED_IN_KEY',    'yM${*AnNeIKk{6arBrKc 2VwHMw4F+NE.UCbU@s3XM>gkD2og{_4B/ ;F6}T*irJ');
define('NONCE_KEY',        'E3UuMxxz{LAuCa*I_~(0y6TI3}Bs?DaX I5d:tB&Z([-;9!{]%6^M/.E{oL0e5r9');
define('AUTH_SALT',        'Qk)>Es4`m=z3Rb}+Wu6}@8A@MBy`D_ffD:2m}o/n9t4W];#?dp+.#usdi<)*/7.n');
define('SECURE_AUTH_SALT', '<g~?YYjug]zBvsa{=</088R3044[Ee{Zot[w*#^~GO0W){9PxkbQM;6B e:OmT2$');
define('LOGGED_IN_SALT',   '4e3@MmyKO;}~_iZ :px]So|T_gdw7DeKWmoB-7gVyd`:&dOBBe<O?,(Zl&{]qLXT');
define('NONCE_SALT',       't^`#a [T<OB1M=(jP(aIzJWJ6kpDpI.EofVe0ee,s9-<KlzAK4;4a)U$CF}p![r=');

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
