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
define('DB_NAME', 'micro');

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
define('AUTH_KEY',         'ZDxInt7oHBE%$Exg<*;F-{r2U:-a!~[d_zkt0t#Zce#1jBc/DNmUtWaSe#G8naMT');
define('SECURE_AUTH_KEY',  '-+{=9jKN|{JNpxx?[93@c$7<=>7QnuEsh^ekc:I ]#zF;S@Mm)2J?u3fv<?-o3bl');
define('LOGGED_IN_KEY',    '>JM:Y8lFv77V5PIqDVfBK$&@EoQ([@hv:C~oTb;htN|c^XqZq[<SY`E?(J.F&$sQ');
define('NONCE_KEY',        ',3jHA`lF$Bz^*pN|qcR;)]=,1(VZpzTb;pRxk5nz?? 4Cu%vnktR5/5[[WwKJ*rh');
define('AUTH_SALT',        '8whQB{/fHiyn+NNF9L0LvtDb$saH~{Rp }%]0wh#=mGRHh5^(z`{V`/F3S6d~5WG');
define('SECURE_AUTH_SALT', '~Ox1|Hlq5Ry8Cf)p}|j:USHy+_nKr>Wmxd937(mZKXc3|Namz`kuN1Fx`>sVH~$i');
define('LOGGED_IN_SALT',   'p~=q$.Oy@0.,XyQyk+-V Bpa%ym3eW4O=^ kk[<Yl:?xC^n>nLu-Z3L+PQa=6vBd');
define('NONCE_SALT',       '[!ry@nAz;>T6+WlO7tp.a8{r/ hCg}mX5(@{}b>o/nKnw7o6*/0~f}GYL@gP4*nI');

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
