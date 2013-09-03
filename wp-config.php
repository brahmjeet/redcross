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
define('DB_NAME', 'redcross');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'a');

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
define('AUTH_KEY',         'mLL1@O!86YEb|U#{X4S^^U_hGQ4]C0[,V=NT!N:UZ#!=w&aiF0}6;)-a+hIA-JIh');
define('SECURE_AUTH_KEY',  'cRoXGgyrSi0g7l-ftg8w^7FJW-I%-CT*&WO:8qY-;nR-+] jA@j>KRktmYmb}?|=');
define('LOGGED_IN_KEY',    '-m/O]&>.4Y1=Y3g^KUoymPfRV.0.cO;@TM>W-2GjQ*+S-cr= 8N@=<8qhM>VW~k~');
define('NONCE_KEY',        '`dR]t~6c.G}E/z#l7p&0=Gl^MZ<2f82|0 V-4fs4R(.T|Hmy{C83;tR+3526-+?6');
define('AUTH_SALT',        'f(|;K,*-u|.ZWRQ9D:|@fPWraW#3&`7GWO`yJLRm4`||(a[~e;4-V8b}Q{zb3XG9');
define('SECURE_AUTH_SALT', 'S%3e/]ukbz:,Mt*6IWgGT&<Op~:XM#S=_8(VDW*$[*6>-|[6A}I4K!bY^J:/-#Fg');
define('LOGGED_IN_SALT',   ':!y2iIs2|h+^iXMSQqRf_z&@x=^ ;`*c%;1]2-p9q`;:KKD]4@G<T6[ +4j:5|+B');
define('NONCE_SALT',       'N?m9R/F-6Ifa,D1Do(Nhse&(u$w5wQS|Bc/t3{N+qT?n0|3&d`][05w:M/W9p|d{');

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

