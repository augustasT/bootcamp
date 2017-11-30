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
define('DB_NAME', 'illdy');

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
define('AUTH_KEY',         'I7-8!~!G%x]%@[nT/7u|OP4zpS(s+Q2VNY%PC~JF<^g}!I]Sr{mbq(5KjR^b0NBf');
define('SECURE_AUTH_KEY',  'S@+}/6&yQZI:bVO_U?&idQz9y.f=@qW9m5ZJ!?aNb*m2Fj `-%F@$?JOHg3x]%JY');
define('LOGGED_IN_KEY',    't!-F|7HvmB)NAHmcCpbFKi2Kw]8k0~j`}>dWS2>&Ai+1|`!Ea,jg-TY&`B+Mb(M[');
define('NONCE_KEY',        'ZOq>RYzHT^8Nx_)cjBA3;a&:DN]DeLJj.,c~;v-5GUG^O!1T]LpRGe#1fxedPnyr');
define('AUTH_SALT',        '/MG.JD9pq*LaUpS!Y|y6?c&OUDS= Eh?@#&d!S^N1BD>`d8Xur*B*4XAWHH`Y=/w');
define('SECURE_AUTH_SALT', '[hKY|&2H@jQ2ciIt/hk^-Hp)9;YMSd! |5b#g=NnnnDZ1r^JH9FW}n7CTPDjpM-9');
define('LOGGED_IN_SALT',   'NH1+_+!I^/h:=:[B.u=~t2w}(_:pv[%Hh7e]&m7f|U^6@i*AL{fz]{L{RTpZ&eJE');
define('NONCE_SALT',       'ZM-6W bZ(8+E.T!5.}T={gK3*OdEMxIKbF4?l?[I4w#Xn3u!6{v~G;!+{0J1o{v{');

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
