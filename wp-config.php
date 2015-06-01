<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'xtremevac');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'H=tUR5%)] -XTrBsTaSssvEq%7y:yA<>lII;Dv^/G(Um*%MDc0km4u^{@cg#h7op');
define('SECURE_AUTH_KEY',  'a>w2:>W-v)V;M2e8<2Z]pgj#0n?|D5V;NVfux^<O,%RCPLG>%m[lN9(;oqfp^PB`');
define('LOGGED_IN_KEY',    '{b`X-tJ[}DNuayn2+p+9!d`A9~22q3L `=+%<Dlu=`I`K]Habou$2zl!H-W2xsC>');
define('NONCE_KEY',        'O>n{K.Qq<|m<&-W-s<HJoHwRS2@QK<Cbg.<JYy>XK>fx0`8hil 3JY,zUO*lD33*');
define('AUTH_SALT',        '_r^K!?9<jSL%(P+GA_u_Rzg:bF/|bG{5A4>Gu3z^^lc`ueQvC4:+x~S`L-Z&E{Hb');
define('SECURE_AUTH_SALT', 'V!o^v(1|c|4r(@gbuD~|50X;I4/0[Q3aSM*tX.-!>^9$:W<0@hv&.!XZX]9d_+4,');
define('LOGGED_IN_SALT',   '+d=@4U)i$Q9t``i|/be$1$c(B+|aT00b]Gh [3)A%9v[|v:6aO*!oFw|++Q8HC,+');
define('NONCE_SALT',       'YxT5w[X*e[JaElKS4cVZ%p%#;cw+UWxvZmoRYzq_cYrk2qrO ]fq#EC?}DntcmX2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
