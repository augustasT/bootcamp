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
define('DB_NAME', 'illdy_starter');

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
define('AUTH_KEY',         '?5~=GpD>-gkGrd?bBG1=!6A@o g0}|aP4q3ZI+KHV6A0hCzST{8.FZ^;E_Aa8+|j');
define('SECURE_AUTH_KEY',  'JxdsLlA|m>mW%<R*N*IchdGjn5M%Zx/n+@mRS{44i8<K&~?<}<DsHK6t]tz%&7GW');
define('LOGGED_IN_KEY',    'Vh^Tw?pxMpIi#rJkqB492s-y?kjGDC#$u0NuFzRLxmTq|u-<4k~;_531u| ~EW|N');
define('NONCE_KEY',        '!W6x{T8^ulq^3_cJkjsTyWhE2S<$)K0G9VoDIIPU9wMc10K;u5,&bf)&Bj^gd}<_');
define('AUTH_SALT',        '6SJ6Vk@E*F[$UVT2Z.VN3O?l^UEZn5S4*6v[<eTJ9LRRdgE@9hMHk196Kb{Y-GnC');
define('SECURE_AUTH_SALT', '3(kI(KkYFFbY8%-2y%JRSGeZ&))Y~it6kZP6ZldM*UTIJJ<Wy@S[/qumljg|2EIe');
define('LOGGED_IN_SALT',   '*: ]do[M;-&.;P3>Qm1}gC}7DV,&u*Y!T61)o]8h^e}y|uNVdN?yI x-r&xq}g*K');
define('NONCE_SALT',       'XXwPy+urU}v`yu_Tf2qYrnzS#p7coZicpVqjeG<}:JX4<x!]|i{k3mudWpU#w6x5');

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
