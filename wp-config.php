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
define('DB_NAME', 'probarranquilla');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'u`]Q{Zz.fk^`BT/W73fMI!c+FZDft`p$*ZhslN-?x w>PrzoYy=1P%<Wh=88&;[P');
define('SECURE_AUTH_KEY',  '8Y>6?>p.KdtP LyD(A6P|[2|GCSqUfVt$9Y9P-RWKh0oka<>`_>5l6^;NpFu:xc{');
define('LOGGED_IN_KEY',    'ZGrY=PX;O{+xf]1>:S^Ny*sSwG3bngfSwrg_]4i&Y]P_[b]@EN9B)%vB{DF^&ln:');
define('NONCE_KEY',        '$||^lZzVV *diFJeKda+6vmA+;*dq7tipWu~]x{Ed`xFZ9w1qJ?2nF6cJr@@Of0@');
define('AUTH_SALT',        '<&w*16u86zgZn)2)S*F?n~h}so%i{edzmGkuY?$@dA#.SE)Jmk%Mynl6xla_(*XO');
define('SECURE_AUTH_SALT', '&n`oP?vt[ZB9B )Du*(*OJf.i=/BDDK>Y&ysoCocy`I{[gn/xO?C^k+>%{raM5G`');
define('LOGGED_IN_SALT',   'txrJ)k.I00mWtaW?-3q9c71@M>JxG:eO0<PWHbQ+hm<L*X$)g2D5@%QJ#_Rr3-1G');
define('NONCE_SALT',       '~mTzm1<Idz8qnME>)op:x91%(UKmz2ccb* gZ*ZnP6Q]m(gC)uK3v3ZV5:e+3jR&');

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
