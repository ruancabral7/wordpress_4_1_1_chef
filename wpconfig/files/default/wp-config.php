<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'wordpress.fgqry8.0001.sae1.cache.amazonaws.com');
 
define('WP_HOME','ec2-54-207-18-80.sa-east-1.compute.amazonaws.com');
define('WP_SITEURL','ec2-54-207-18-80.sa-east-1.compute.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vvrxkiller25');

/** MySQL hostname */
define('DB_HOST', '');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'wordpress.c3gngdvvms6l.sa-east-1.rds.amazonaws.com:3306');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '85s[XE-6md6z++)aBmU@6>3AuD(X&9yuDp^rIKmhsh0DuE?@Ge#$
define('SECURE_AUTH_KEY',  'vT.^@ts[Nhw|=LT<`t>uzvP#i||!-~ jW/=z!(/5iIUdp+~lt!$$
define('LOGGED_IN_KEY',    '5h$Y{*dKX$/R!!zw<z:%:Cz`wg))oP{FgF2pgl(/I}KV`!*[owS$
define('NONCE_KEY',        ':#-3#t3^QrZrH#-&q-W1z|o,f.6ew2O@X+]pVl1<+&GC]qO]RCo$
define('AUTH_SALT',        'R&N!n1(0T<C-WHPf|#(O$|Do3_-gj;fyU1B=v&}>r9fnSndA4y_$
define('SECURE_AUTH_SALT', 'n3QU1S5M5TFY+uox%LYmpi=o*q+o+-{6pCH&y@>P/m]C&w6CBGB$
define('LOGGED_IN_SALT',   'Tqu+gN_?oPy^_9#Qf.s8c5@;L ;BK-(DYYUf*b.9E~G8nXJ^bR9$
define('NONCE_SALT',       '8qxfihM4;0v/r<9^5w;as01SBg%bw^cL|:[~g+LoVk?.Kl/#E=P$

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
