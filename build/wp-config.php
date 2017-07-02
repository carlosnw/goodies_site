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
define('DB_NAME', 'goodies_db');

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
define('AUTH_KEY',         '#8&#p!(7%+(bbF2{Be`a,:Hm0Li8(Vwv/~.8@,yCmi19$;E80R0BP@]z`S2G|EbS');
define('SECURE_AUTH_KEY',  'C`MM(Xz)]okpsFD[`[~b}XO h/CVZGSq_Hr68vmnlZH2lf{rjhq HnyVo$:]Y*h*');
define('LOGGED_IN_KEY',    '`$+|6SJYBC^B>6^9~w+:Hgc;{UXirSk/~@mj7^(LSuUcFOF_II7sJ,@Y5ZZAU8p6');
define('NONCE_KEY',        '|s6z4WIUqIddeG%{C=Vah0j[*~#Yqh`bI!cmP5+OrEDMktdu!B@C/UR?[ha<4BKx');
define('AUTH_SALT',        ':y>6r[i&SFcW;:S}>*aeh4]**+#mR]VNy|?p5bISTx!s!/sVeqWhc@]2w5kb:*is');
define('SECURE_AUTH_SALT', 'HO_f2-2L3JcOMO,Xcp,$Q,Sq/(ubd*Mrkn*$X_5:Th]V.z[:oD1fik_iWopmRVqX');
define('LOGGED_IN_SALT',   'eS=16g>GYbWqx6=Z0FrAoN:K6i^*1azNQ}:wHD0@YSA7FNh?YOP]xID~zwQElEtW');
define('NONCE_SALT',       '>>)K]5=*@I9Qh?snFkkT&xK??cVqQH_KvZ ?PgF=vFVN=:X{b P2rowvYm.sL+FL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'goodies_';

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
