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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '_uboLM_dg>LAW:}lto}Z3n4A+w>>[Cv<=BP|;ZAVS#oM1;.ZB5V+s@6}AI1}1<sV');
define('SECURE_AUTH_KEY',  '^TD2u4`F>irVR,TjChN&!mCXdb7#{O!)mbk`3<Sk5l( anyf:SI/9Ogg4|Z7`3gW');
define('LOGGED_IN_KEY',    'A;7giaE@Iwv EEpC5ATBLz_8iYHTeq|C>:,Aqc(6t*f!cB*? Qdw)__f8~>}#HZ5');
define('NONCE_KEY',        'pCpDm+6IW^bygtlh,-J-?p:QNf#j*KXmA{[2O/tuz1]q1%v4c.^erN/kpa1&BlD~');
define('AUTH_SALT',        'Ak5y~CsX@vWGdbf+`cZJEl+8vZANXte[*w.|FTiYFd:QNcicmrcxor>r2%g6Q=KD');
define('SECURE_AUTH_SALT', '^-2}=Taxb5F}!j@nYIsi3zWh[wdc3b$uLe*+XLHW}g?x}8K)0b!rc(YudWmU[1WW');
define('LOGGED_IN_SALT',   'NUN`sM0ONV<>ed<oL=qFoO`!&5s;B@t @8V_-9M`$jph4)<^jy=Nb]S`7kh74K|_');
define('NONCE_SALT',       'ykU<_Y]fEs5f{tH}ax)J<S#x]+1amf>HJu@3gRY0=H_F5R/MpOysWvh{yLX]g8/Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rami_';

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
