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
define('DB_NAME', 'ra2wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin12345');

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
define('AUTH_KEY',         'g7=0zq]n<$)8xyElb.Yp}pBCiI_rUDV*pG`n~USA9wjz _ek(nMd8R6H8QWfz@}|');
define('SECURE_AUTH_KEY',  'G0/-VWNn0^R+`EvgIyGSj-fg{Z7c](jsSuXmfHBhBG ? %MJ+Hoc?T/R[t#9YPD?');
define('LOGGED_IN_KEY',    'Pd$Cc.?u=0>:tpT+&jZM{:5%8%V|fLv]1+byZbLM}>S_}%dL4VKx@kwgx%y%Q[x(');
define('NONCE_KEY',        'Wy:n3WJwy,)QZj-&JBo]$fM=zAQ^l?tx^}!F[]:5^x0QxH+^ a;BhD4#-;]kPjA1');
define('AUTH_SALT',        '@Er]Ia@J$gX]$>s9qb4/}=0dvB$YO>rU<,ZqoPI#bIAOtp~/_-%/!jP|p+9V%_f,');
define('SECURE_AUTH_SALT', '<44t.zVr}OKX?>%*`P~)Y2fK^C|#+2uU7~u>p{XA7|,Z{f-l;{_.ooyV*}+tkl0<');
define('LOGGED_IN_SALT',   'u!4e.R[|Cz:[C;@Pqi@zV41F-q|Iik-wG {g^sl|+QN9<Ja<G3=BlQF`p+FJx3`>');
define('NONCE_SALT',       'CukN|h11@*Ou+>><ny?vrP.McTO-RU4_B4-6rQ0T-fs-4aSoO;,z+7yB2m!Q3b-E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ra2wp_';

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
