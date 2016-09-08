<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'WPCACHEHOME', '/home3/aumdove/public_html/amalfatanos.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
//define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'amalfatanos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '4IOW!0hYM!75K0hoUEn@3yoCN2cIf3MP1lH>xf^^Xj=B>uxv_$2!csNQVGmAK~UEQCK<x');
define('SECURE_AUTH_KEY',  'BWL24RDS;ak3Mg21S3Znv5\`qICa9(|4zy8uk8yo6j6-~61>Y:9TrO^_!8~n#R*Q!y#Kf(m?Lby1R3');
define('LOGGED_IN_KEY',    'K*2K2fz(V6)rdAb-W95)l~OQ$3fuaNX;H378H:bW\`B*j^c6CsecA!MK:xfn3e#-NO>|4dz-5bx');
define('NONCE_KEY',        'KMNAME6)qiT-mCjYUcf~Jy^Lx1tQ!_Xn-kgj;5zvY^eyWZYZCyjXz~L6=Ix8pSu^RC>?wEr8k?f?#wNddmb');
define('AUTH_SALT',        '#!ha5IG7o!-Gz-UFZMNy\`tQx)Hp-oEA\`_84qsCfMkoxxY=-cv:i0<NtWvly!Hu$f6k9KBiQDxK');
define('SECURE_AUTH_SALT', 'EDIP:93vE|OW:JyH6-xSNVx#Z?3g9VD9GJt(iB2kNUYjskWx_F5<bM(|<*j:_ZNL-bP!hn');
define('LOGGED_IN_SALT',   'nr_Io(NB9!nExM_l6m??z;Jg~PAtKUV7VRC=7Yv4e)hsZ/KqyO4A:!loAQJr-\`#(6kioXhdwn/p#1C|!q(5l');
define('NONCE_SALT',       '5P=Y$?vM_h/c^\`:x#yAxW-=-/veN#D8NcqI$2Y@Ys(Ip8Kh@qDC\`n>-_RvCkAXqnWTrHG0ed');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
