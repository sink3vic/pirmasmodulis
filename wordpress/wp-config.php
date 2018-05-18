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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '&cw~ZZnQ/H-<2m0*tT&4!/QeC[3.E*Z^m-rQ/>8qyn ( JRW}06nPZwEGCE@C%!F');
define('SECURE_AUTH_KEY',  '$2V_mk*}qnfklt$BT=QcN4mSFCe;sN6F_&B)-8dReTlG.3`Kbs4X5s!-/Bt/?DM[');
define('LOGGED_IN_KEY',    'r}rXu@-{4|PjVB$C=Q@~&6)<^HGz.aAY8F<mv_uW(`JH1Id 2IA(=`o,Rlc#_c8D');
define('NONCE_KEY',        'vXmC52Y/]{Tt#[huuAB.x8S+Jlsgd`%9Mq1Bs(!swG^Ox/l&(]m=SW>YnR1F!r6r');
define('AUTH_SALT',        '.#`#Fn=_(kpz)++Rhn<[t}Y/Sxe^g#yqKwI=M8~6C N8$}e[rnz)8k^lCM1B#;cU');
define('SECURE_AUTH_SALT', 'sXfxQ!|J<PRd_`QxpKE>MPdzH,~D,J)R6!Yjanzhg9f_DW44s jdO]Bg[/@DfeZv');
define('LOGGED_IN_SALT',   '.P7ez{XiI[;l?Xy=i#2!3jG1x7ZgTWJjqn)YIj,-fI{.e}.5h7iF&V }EC>8wGb_');
define('NONCE_SALT',       'kV3/VwvWn|oE|{ZQ 44dsTS|.#6lLa}D&DJQmpXwK&PJ*4T}.<fd:g@Q@E%Uur]O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ws_';

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
