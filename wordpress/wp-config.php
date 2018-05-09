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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         ';d[[oc<1lJHAk_wkERMUMj:M$g7NJNi,YS<:5.*sN5-pu-:}+*u:<&5<!4F4wV}3');
define('SECURE_AUTH_KEY',  'E+P]c?sr4#89}z]#{_FGFO{3ImV3R =CC<y.hzR+RVr_WE`5}^V6KkI[3S#g(Bf&');
define('LOGGED_IN_KEY',    '!E8IcME[)3wFwwur{5^0~OqRuKGR{TBw^1xhvs36Go+T7xlHOMK |>;x{{TbR(j9');
define('NONCE_KEY',        '$kjjeJg|*gUgZ1C]}1DnqNNuRX?55sn/s XiN-b]b;V{o3;@_gC8#[h^,se](O4c');
define('AUTH_SALT',        'zyGv^9AD cqSfBrIaX(TIk(QohVL!V]|5[Op-fi>jH403aqD$iX6g({l5f(SV7[I');
define('SECURE_AUTH_SALT', 'RGru~i:+QED.A<#nsL.-.az=UE|?Incinh1 Yz>e^ :lghMnfKU?AsN<||Zwok|P');
define('LOGGED_IN_SALT',   'BPrtt8v#(+A335(k}O9#)qqYI2198bX3o1daBQy7NQj$ooXJ4mNm5aAi.%(m`O=Q');
define('NONCE_SALT',       'b-~oQ%bpSRN%[S--KXdVXqCP&#(7R!(LS(sQXB(B=WD~5;[-JO!gXOZ1{l).EF >');

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
