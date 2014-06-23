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
define('DB_NAME', 'hiddencity');

/** MySQL database username */
define('DB_USER', 'hiddencity');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         '##~Wz X95ac%b!ie?#-Sal.:sO<=%*vlHb`B5tiQh4wTwp9K<i-5M#XbdhR+HEZx');
define('SECURE_AUTH_KEY',  '$$j;P/eRNg0L+|#wi52*1}SvmZ<JtRvD++)>:|&J(0(Q9 =HM-6eyxt6|=;Va-n^');
define('LOGGED_IN_KEY',    'd#B*,l+<S+V#cj&%M)szkEBM0-5?+[VP>t:OQ^&|8XMK{cz~nmt|f)*ePlqz/q 2');
define('NONCE_KEY',        'x cg@xDd$!#$(/U8AUii]NL x>S>t@Qs$(gm+ukzvq|Th/7Cg:Zp-DXU8o*JG9F3');
define('AUTH_SALT',        '@!0|+.hVM17+tcnl=mTc8/w--&.ZqIbnSE3v|`fzJZdedj,86US|.ezq}auB^E*>');
define('SECURE_AUTH_SALT', ',F_+!UUyb/:2):C1`u(x4b#`16.RYWN59AgX*;4(N0JKsN]~-|MZh?vz/-k!YE^-');
define('LOGGED_IN_SALT',   '|0GPZ.{]Ay|Ntoa-D6pc!JCQcu_8},&NA]1|ok8)ZZcK$s|N|apXfbpQeLqc_G3j');
define('NONCE_SALT',       ')$=^]7C2e7` %DAp:B>BC|)ZX8v=(v~Zi3#U(02{AwE}_+*:t~8yTCBpD +-x!DF');

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
 */
define('WPLANG', '');

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
