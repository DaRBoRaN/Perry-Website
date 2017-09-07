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
define('DB_NAME', 'perry_website');

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
define('AUTH_KEY',         '2ir0a9Ts+L0@I*$5`vQ3@QZ>H!BD>nxq}w-o5PDc<gnh-#QqUFRb]]m#MA<q9#}k');
define('SECURE_AUTH_KEY',  '%ET37anx)m,FI*6W4l>T{mkrbBp)#Q4LiZh`^EwNsH;+L^0]{ah9,TYC(-Nla~*l');
define('LOGGED_IN_KEY',    '81v9E?LB,yPf$Kb@0AF@V0BU zWg!0vaVj}sHcy/H}6%4flQ;*P!z<rCE+M-T21u');
define('NONCE_KEY',        '{YRgv%jj;:7S:3=n>3DWDXwB.#tvI~M6[?RFliCLa<QPZs8FI*x|N=RhS8D|4~LS');
define('AUTH_SALT',        'R;fZ<D@x^OG<)uL#/s~bcxF|oY{~M@.H%a~Fby$dz^#vZu7k*j_?+qKeKL|;%.aS');
define('SECURE_AUTH_SALT', '*nDp`4epC1L5:CLyF&|LiP~y$d9_k;,qw10rI%AbOG{<_5oikJkUiauuUHja;ndR');
define('LOGGED_IN_SALT',   'qi%HJ5xZg&?5dnFAHayrUrc<?e4A(x<mvcF^3qV{ :;id>Y0A/v6iK<90i9;Nr%g');
define('NONCE_SALT',       'B>B|*q 5azVd[pTd$|R6F~F+Vq8CydG=Wi>@v!2PbznMiTK17#HmVWdJRnJT]|cX');

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
