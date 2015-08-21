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
define('DB_NAME', 'wordpress1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'S_[#8(%44OT|5+kR~wh-BK->0=)4g!j}Jp,H=815l`<RJ<f%)]J{dgc*qdYWfC!-');
define('SECURE_AUTH_KEY',  '~LSs!/J!w X(c|Zw%RQ<)6di|Du}+84x}TzzhxD%Qd?B`I]F&jl{BB5eEX}Im$p3');
define('LOGGED_IN_KEY',    'T7weifK~B8,[,edn%:U|_B@TP?yE2m>Rm@6osw73_i+c6ClFmVeP;rp/#GM(sCOp');
define('NONCE_KEY',        '~Q@`BYQ</#0un<}~A}G%)mG[x^gcG*W5P+wMHV[emMHq;>lrvM9:lz^DoFD}A]M1');
define('AUTH_SALT',        '|bTrL?]@[MmAg#1GhALm=^-u&gknHG1s*s0N*7li/dt~7]ja+ACML2`20{Wqwx]>');
define('SECURE_AUTH_SALT', 'U&e3_1n?}KA^6!%#QI%dKR>LIy?jF2w+C@zlZH.$u-10<5-_f~aQ|Ik~sUwgms5#');
define('LOGGED_IN_SALT',   'I26f-8j{<Oku;n]|{zMTvE4@j<eF)F-baT2)`CYDDRF0hE6=SJ+r=U(E#EgCduB;');
define('NONCE_SALT',       'e--hGg1k3*7V!rr=;t0Nn3~IEj1,Of%r-,J9S$8KF`4|Cgtcdt7{+.UmSxJ2j7}$');

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
