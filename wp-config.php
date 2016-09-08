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
define('AUTH_KEY',         '_7HSX19<jM637?%3Ie+/h-8 Q/a#2*P)T,^FfS)~fE?$Cr6,}$<:.:^12|VyGby)');
define('SECURE_AUTH_KEY',  '{{-*gX^uERK!ge9%+Z/Mz}d0TQSPAEr-k=Zq v>ysn~&Dc)jvOlT9|HhY>7R.`Ls');
define('LOGGED_IN_KEY',    '8SK*%P&CysY&Mwm6 7T T$74i`cMLJ.<ea>u=u@L}flbIffI@&%05+P06G-xyN;+');
define('NONCE_KEY',        'eJ> He-7UXbmn-=DT|0uwcWnlj3q~{)H_qUHe-@>3Y@Rtp]BO0Fm,$DH>|-L(p!2');
define('AUTH_SALT',        'UuEE~,qUw6JjVcY^mJ$X]p%%cjijFKKV3x-TMq>2.UJ6X%`Eg8RVbq*~P:9Ei;~`');
define('SECURE_AUTH_SALT', ';17q@(f2u>LnyK%!,S]_uJ7$D`U.%!2HX<q6QAF-d>G<6f^p|Zf0$YtAQb u)0L&');
define('LOGGED_IN_SALT',   '.2VzphO;2,YURUYe(.7Jf1I9ygd=Afz u!^EVva7=%~YP(/PrNU&Ya5n =vUIttB');
define('NONCE_SALT',       '%Z;p36sGR|Y-%P9Nr)I%_d}7V/%wbH&N`lvQ<>e.)5uPx&=>;_c8lu0QB[i#I,>1');

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
