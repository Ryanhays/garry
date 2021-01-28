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
define('DB_NAME', 'odachv_garry');

/** MySQL database username */
define('DB_USER', 'odachv_garry');

/** MySQL database password */
define('DB_PASSWORD', 'kghs!373€3hfhg75693');

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
define('AUTH_KEY',         ']$/:N7E$)I3v;Hr?8.0E?v0#jq}al-rZJE7eW;^H^I)<F1#JSu,ws<0,+feuF1/f');
define('SECURE_AUTH_KEY',  'k~AL,Z#f=c1,bQsEAno1vdFQz?v%[gd&3V^H)z,7R2tmO>lBjW}(MNk?W~}[g?HY');
define('LOGGED_IN_KEY',    'FefUVU$/?xS,D&}sw$ $!d+,4tQGJnwO$|IQmDG$0$Dn H>g:nCZzMWPz72sV,_r');
define('NONCE_KEY',        ';#s/1%Xv6 8o60D[~FxN}l%*tWVtj^bT@!6MOkAt!NCG7J{lxIiIh2XVV%-#f6rT');
define('AUTH_SALT',        'mjIw4S9v5$c=v}[*1p~VYf1I9s6/~F$)2%2<:<8U[[yK.Wls5nvjpPlq_c64o}l`');
define('SECURE_AUTH_SALT', '2a]^#7pvzz%]0qAh8&;zlC) bg?FzI_4yB7y$%u>?~{7RvG1Tj2G))P*:iD6{@xD');
define('LOGGED_IN_SALT',   'uz>aOQm`#{/L!Z{el48diH=TaI@^XIW?fC~5G_6oWF4NzO./($ 4!N^s]*]h.Vxc');
define('NONCE_SALT',       'ZIylRE0{E;<>Z|?Yzs>=sjH+z{clyy877Qy+hcV83=Rl`B$-U87x-^m8P&k -{Qc');

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
