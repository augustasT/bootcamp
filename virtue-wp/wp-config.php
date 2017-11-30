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
define('DB_NAME', 'virtue');

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
define('AUTH_KEY',         '#x92.WvOu]:ej65wwcEwrWnv4puFa{oT^+~m:#2T|_%#oO%e1u_o^^dqgk61mKUK');
define('SECURE_AUTH_KEY',  't#?LAtB @Ezd3q-z0?3yePS/~J,z->a!p#x_mH`,`x:zX>,N-#4@i]LJlfAl2H%f');
define('LOGGED_IN_KEY',    'R :xoCttY2tbaM>6zbZ$Gi!JtTUl{_;FWc%ND`3-^no$w}d,UO6nbge>H!I:6Q~Z');
define('NONCE_KEY',        'mrxrR{zqu%:+|t$.Ib_kiw`4<6_*F9=EgKwcZLS3Vv}na:@`<4+MOg8(ROl<p017');
define('AUTH_SALT',        'I3tP<,o?s1r}(U{)lOxVBkIpn8=}?k.|Eyz5r}HOI[;ID[|kt,QhlJ^*rOl<`eO/');
define('SECURE_AUTH_SALT', ')lWh3xwXf7O$ 5X;pudv: %*dz+f:cTvEx,P0wJ-40>jUt>Wv*@[i[nuZQWpC&4.');
define('LOGGED_IN_SALT',   '7K@)e)&j0mF3Ot~WIg!5U@rJczD]qq3P,GN!pW8$Du8E0hDCO:{9AP~.2%BajC%D');
define('NONCE_SALT',       '!}Jn85H;jjJS0{y.aHCRL;<)9/oT5~H:H)xS?HuD8aO2OdsV3nZ+px[-?!w08rU2');

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
