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
define('DB_NAME', 'illdy_virtue');

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
define('AUTH_KEY',         ']uEJD#lH##YEzZq]r8yG./5O-PB;Dv28CyoRY7)yq+pjG,VcWAH//Wi3Z]cjU6Io');
define('SECURE_AUTH_KEY',  'l?ZZ6=dQGVXHij56<?B?_bYZPNmz%AMJ?0>[z6Im|&R^]0&H*|J FX-<P ZRveBZ');
define('LOGGED_IN_KEY',    'ef}PzRLXuUE|=|Hsj t-jEKmYwK]trV-;t-)QT667KKw`_Po(=jR1M`GFjm+hRV+');
define('NONCE_KEY',        'BHFesT/b%Z9Hp94e>Y(@qa&bMj>{`R 1MQ<d_:mlC|<uUR`ud.$vdW`}1k8cF;Qt');
define('AUTH_SALT',        'y56%p/nDxrscuH.8:bhFrE|bPJ{r<w_e3HEYPA@4LgBzH?e/h>Rzy1C$HB`%7I]b');
define('SECURE_AUTH_SALT', 'F]P!IP.74Fjam<U7sm{Rahw] Nc4[iW[/8;0on`MkqpIb&37E:<+zY?^?bKvUms5');
define('LOGGED_IN_SALT',   'ZjWaPa!?&&eSoHNONq9Hn@7Ir;zS3|jj8(f_cua%iU/!u/7cy0Yrr*{n.PXvR,/*');
define('NONCE_SALT',       'a]u<=J?jZl&.RX?akB-/O@M*qkQr1cNNoht2FwXLB6b o%VH.=E@(C8%l<#Yb)^7');

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
