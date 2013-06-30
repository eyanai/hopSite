<?php // Modified for Hebrew translation
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
define('DB_NAME', 'hopsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'W2A#Hjbj 0%3H%0?esp=jbOW>fbd{y<3jY-T&QH6I(|;-H;Z.$Ii0|B4(>m^R)kY');
define('SECURE_AUTH_KEY',  'LA9V5rj~|{18q(Vm)DQfg:pgG$77?QTcloRW:OMcSzKnWh[X%X<jBwAi|hnM TSb');
define('LOGGED_IN_KEY',    '3(&z[)parKd>J.yxD42zzACsXgYIJlQ3wEde%hRjE7l*_Zt.b~#yvJ(v7rH/X4y9');
define('NONCE_KEY',        '}]:9B8DY1$3=G~GOp!|?7vL-i>NvZ[gDdH HHudtAIPcuXsiVO#hfyy3]}sMm+hI');
define('AUTH_SALT',        '>(`lPE8|dl[ A9T=E=&*;|hyj2a{t_ValC1<U0tg|IFx/@jMBi3w-X)~hdOUs5m1');
define('SECURE_AUTH_SALT', 'TP %s@,l[oi(avN$pu>|@ bpXYomN~@|ezU2]rc)l!r0y< I..(uedew#~3!;kW&');
define('LOGGED_IN_SALT',   '9k9pcnr@nl{()N3DkyF6=jK:V2Q}+Tbhb0lDSEDdE^iB_,&D^]/smp]qvx|9xtcQ');
define('NONCE_SALT',       'Egml+4ya&J!d]+5KO lwVPe?),WHdLWlN2/R^Qb5GI<  *V,V[T0OZ$fHnyF2icS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 * By default, the Hebrew locale is used.
 */
define('WPLANG', 'he_IL');

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
