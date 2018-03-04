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
define('DB_NAME', 'mag');

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
define('AUTH_KEY',         'z**q3+2;1L3&V%4=htx.ti4UMWL0_9mazYWV&&!-WF4?2PDdi$D4yF Mn4M57wZ,');
define('SECURE_AUTH_KEY',  '4eBIV]xMrE52Yzd]*xCwB6{8?A_1k6ZRy7n,93Pk1u@Ib=yrrA~Sf{NfM`eS7Q.}');
define('LOGGED_IN_KEY',    'W3.41xWYIbNV*Dr~.:_fZavh.pJ9=MT_>P4WYjMS=SI=e=@#Yz&Izut/B8UuND%:');
define('NONCE_KEY',        'w`Hg@c`in wS/}=#s&,hU6$7UYkV7=D]lSGR!9QE6?P#vqCCQ#o3z|o>%-m,L?T,');
define('AUTH_SALT',        'aX9>5*sMLmEH`H#o-E3tB=~sKw9h!9=?T4JnI9$EEvCN?V8k[t};`DC$cOCZ+N7b');
define('SECURE_AUTH_SALT', '$KXFg7%[:]hi-A})+Vx^dJSZ{qB1$$AZ7/N$,UGETCJljs `=hoz?-KB/A-^O1%T');
define('LOGGED_IN_SALT',   'g;5WbaDb@9WXQRVcd*zSZb(<QQ0Ly.+Y8`7irU4!:J!4)OFcdL4_|Ud?T/<ht Eq');
define('NONCE_SALT',       '{?nCz{trvXe/j,z{B)8xe&#X{O36%oYpegO};GtA:o@u5OVwJ_/D@$VLYgB.?@c)');

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
