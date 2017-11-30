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
define('DB_NAME', 'treehouse');

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
define('AUTH_KEY',         'Q<yezkwkGs4weKOb9 JaB[<XPP&^3L85ucuEM+(VS-OQf0:(.sNe]b2L%:YxZ.JL');
define('SECURE_AUTH_KEY',  'fF3QW9l4sF@8 AmZ|p.t8jAy=T=3P9WazaFD&^^CdBMBKprpbJ;J`zS&Z|^kMy]D');
define('LOGGED_IN_KEY',    'LUcpiVkBbhgYRlE`jVbiE$s`pwYTyU~V;#RJ4<mK1rz+IJ!,BDK4L<ZQ$jQ(60&7');
define('NONCE_KEY',        'W=]q%EiU{sO1([;;^N,mw?gb` 6/rX_dkmUtbZ}}>Y-U{4^{xLJogFm{X~r(;!fF');
define('AUTH_SALT',        '6 xoGlDD&?}Hnf.(q@;n=;0sl+bw!jU-6j>`QD.Q>Oe+bM<HmPKPVg<Q)JOO/a<N');
define('SECURE_AUTH_SALT', '&)?;.S-F+6wu_TR9Wq[E>T*%`-}:0!qyAr6YE%l8U5lJ0VXzU&ACcRz;Ad;g$&V#');
define('LOGGED_IN_SALT',   '.BD&1gc b.q Uspy7m3]P8p4>)Qvfj4|sQ_5i#!uCS+k)DhnWOmsL#5=4b{(KWDT');
define('NONCE_SALT',       'oT&krK=rgTHIH;-lVha.u;d-Uc-l%tU9qf9wu YxrhH)bLY]OD[SiVm 14*&:4fz');

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
