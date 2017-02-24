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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'slm_prod11');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'slm_admin14');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'trouble');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wscy7wDd`1$Sk1?p8.NL&*it_qS)T3Z]f1 ;j[[l}wSTO}B-oed -GhL^ASiF4Nr');
define('SECURE_AUTH_KEY',  '|Lx]|}]{hJ??oU8^bVU/zU++JEh2$Lt5U<`hnXL6$j8vrRT2X{;@_*~);7[Jqt#$');
define('LOGGED_IN_KEY',    '< y!v#/Im&!|cq-8=O`qho{mh}C2<k4J|.!/XT:~rjWth)1E+n[3nROYR:ym^aa3');
define('NONCE_KEY',        'I#Ygu]rN6<9Uw^p/fcBN?(o`lp]E$O5+<qH,FD5{VyE [;Julp+MfOF3ro5}%7U$');
define('AUTH_SALT',        'lDl8uzc8+Kn9c9U!1=t@sgtDEx//B,Eyz@HT^OD+XSai*iHe2#Uh1WfruOZ-wPN:');
define('SECURE_AUTH_SALT', '%z$pcW8XO[^|4nvi&XS#YB.o!Ly!}IfjosBfh.K8XZknr={eerO%<.AB_OlAQwCB');
define('LOGGED_IN_SALT',   ':c_hbCl+Zy<O/-@$d3cQnCr+-OB<v?8jDrxmZak~i27|Is|%`M_+,0Tb@Y4,i(4P');
define('NONCE_SALT',       '|}[W8u8[,8M>Q8AM}Xpuk?E--$JkBY7Yu?&>}R;=a7YO4S,Rx&L+saL:yS,?hl:p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'slm_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
