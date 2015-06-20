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
define('DB_NAME', 'wordpress_wa');

/** MySQL database username */
define('DB_USER', 'external');

/** MySQL database password */
define('DB_PASSWORD', 'external');

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
define('AUTH_KEY',         '3G4j=f&Z^LxSv`tkq.foo1h588, 8kE?JNi2)S$Ee&t*-C{6rF4@V)]A LkqJn4$');
define('SECURE_AUTH_KEY',  'Wu9&15~kuKje1+-psWE@fP<V^j|#1I$xh1 hVa4/$^^bEwbfp89ZSbpH=H(34%w4');
define('LOGGED_IN_KEY',    '(?FO={ztoeu|T?UQ r8;Lmw-q)ts9B`%XYgGeR3%zbS.m(UUzezlSQ `]4cQh({i');
define('NONCE_KEY',        'BTwJ]xa$%;HVql{nHz^bFlC~PMIP<}YG&UYpgx0e iE1IBC2gBAy&8lDA^sFl;#(');
define('AUTH_SALT',        ')EdxU.GZZFmZIbm2Nct }k2!led_5_$XRu6X@f&,tLCmk^LO3{$V.)]v1#U?P vj');
define('SECURE_AUTH_SALT', '{z11@ p D-5Yg^2NF%;QI<#+h0uub{vXA8pp,5mx^V9&4v,s.;ug:iz$CX3*%fGf');
define('LOGGED_IN_SALT',   's*6=vG1}}a,6C2|4t0e!0Vo(mCix2}mC8{BXhL8eEw(29UsrZj^IN%93=5>OuiB[');
define('NONCE_SALT',       '>60bEGQxqfJF-(vCLD|b]0k#jWxP[j>(NJ6L~.wS9a!Zbagpln6b)!ZC}>ZN5;tT');

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
