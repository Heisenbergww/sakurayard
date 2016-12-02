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
define('DB_NAME', 'first');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'VU!?!klU-jd:JF)n0g%TtA+&k `Tc.:d@,S/dT)8.;rRisyU)NhLrz[Ts}Q>G3be');
define('SECURE_AUTH_KEY',  'Q%W1?G]QI|.bSw brn}Zr]wM:P^#VJ[DFhxCT~<~>h;K!PTR-6w^0T^w*,ZR-YP*');
define('LOGGED_IN_KEY',    'ed!~sCo[Q3`Jv._CF40|.8S[;ntnX{Y8F1e5c+o<MY;kgS)!nw5_P|!m~J!-DO_A');
define('NONCE_KEY',        'b3$9<Z*j,tk=2C5Y=AcJ 4F/*+%Q]/Pus;s6lXYc=uWSV;U9kHs$F92bl|R67xxY');
define('AUTH_SALT',        'NJ!oS6U:Kjej@/!Vy-1`@cV*)fywY:ljWErbTOX*)FGiD_CXmve&^h.SWl1^0r~7');
define('SECURE_AUTH_SALT', 'Rnp]hmimAN<%`gf0VfC^<strOEt)W;!Dwf%/w,nc.ghD|qVr9Gc|;fb?A{[n^Q~}');
define('LOGGED_IN_SALT',   'mdiu5BQ5<Hu8M`rsk4(kU0X,UWd@8n~Y+,T;dF0|Wf-FNmS^~n{A>EoDMulQSsUQ');
define('NONCE_SALT',       'l4U6Jm9C+-%OE>T9|0!&k7tqrI)hllVciTRoVu[AOCz5fNU68h&=g6e:q8fZuQM:');

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

define('WPLANG','zh_CN');
define("FS_METHOD","direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);
