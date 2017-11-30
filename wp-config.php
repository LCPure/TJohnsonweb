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
define('DB_NAME', 'dblcdeveloper');

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
define('AUTH_KEY',         'RMyk9zG.@X]h)b%5?0{SD:0Q<t%b0,p6FaA%SfE;cj?6A-,4E=zHjGD4Bva].F$3');
define('SECURE_AUTH_KEY',  'ZGNMH{%rAD<iK~*o5Sqok_eJ_J[ek7BXt6}E/!Je/|UYe,#kg}K$JCOc!9<H%M:<');
define('LOGGED_IN_KEY',    'lQa)x>Q8m~g38g2]yTnFxC{Q&IT]CG^VhL~;N0}tyFPF-ZT+Zq)Q#/u2ef;P?fh|');
define('NONCE_KEY',        'w7(&O-*,Fy+9&1^rGE=RM@^vg0]JA1GB^-g0:;U/nWS(:E;/O`/no~<Vw>UntI_7');
define('AUTH_SALT',        'ZU%{bz,i%v5}i#h,0-YkwEQ6}.@1NU-el^,$exw.RO%(*y+I&;=y(c4XTuhZjlRL');
define('SECURE_AUTH_SALT', '8Q3i:sVgW`}9^23t*$1x]:^aW5.l2>gWhCw?R}* 8PgXaB|bEl7?EfPh,t3~@,l8');
define('LOGGED_IN_SALT',   '}jma(C;f_^;7*2K4a{d5d#ATdh-!7C(Cj4:um]eHLZz{7Tak:gE1^AdX8?(2*#c(');
define('NONCE_SALT',       'r5R>loX{y;<^M>*^}/w9|nxW!$^IWDLOdK=@%l86vn~$bxaK~JOSmy{ImD?qwpJe');

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
