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
define('DB_NAME', 'amber');

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
define('AUTH_KEY',         '-1R~$m<F!V2w(~W8b3z$mXEdk.n,gB;P&DI8zAYEU$Z:L{~HENH8,A[.(wF Os>h');
define('SECURE_AUTH_KEY',  'a}|b1hFKLXWC`xLU|Wp>a!v{ZD3&27+T|iVHfaW<vXJCIPpsxjUpVvx4z=3E|t%Q');
define('LOGGED_IN_KEY',    '>cqV7:Cq5@(]/=Am]s[@yO&.w#r3;KXxWC`?:J;50l(G[y5v1UX:(RBdpqMS*G[&');
define('NONCE_KEY',        'vOC>3-I%OO>AL:X0#Nf@F]#.eYBNF[wE-uF[%1a<^wp|kieDFBgDPNXC*Q%**h@*');
define('AUTH_SALT',        'svs$IWg/*TWbD=vN=#p,ofX=,R{aGLD)V 8I{jA>#/v^]z]0Z5TK=b|> 9r63=2|');
define('SECURE_AUTH_SALT', 'c t#,-y#!;:J+OsCz+z<t::bv2}6VfQ=.X(n7&7:T+jD06vt<>6,!umO)rMQMP4j');
define('LOGGED_IN_SALT',   'C-P%wf)#<>?/Dt]2fkcX8)AbiroB:}NnQuU62f[7U.4|LSl)<0Z(^E%c:I2T czH');
define('NONCE_SALT',       'h^#ih+g^c6G|Snawf%Io0@N<#{]6,0$g2{}Q-wL:JI/DpwkbSiu@49DSKi7m[$CW');

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
