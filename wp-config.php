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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'myawesome');

/** MySQL database username */
define('DB_USER', 'anngirlzw');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '{m1f{z~zM>Iw% o(I&[oLUd6wH|.[KYX?+sqM}}UlEd_H$Vx~}{MwPa5TDa&[RvB');
define('SECURE_AUTH_KEY',  'T,]Xe*KG|4=o-RuF+F6<A[_tTfsnOl1Qg ]7DVWPDR4Cwag6hxvlQ0/m-1c 0P5x');
define('LOGGED_IN_KEY',    'w+-dIW;7;[+2;+tk )XpuTPDM)SwL=_aCfSH^FW>jM%|D<a<^%[Q fo|CJRl&IK/');
define('NONCE_KEY',        '^Ik-yTWTm/}y(QCZoBr0i>e8oU,=xc3Cr97^b[M=%/Nk,lMx6p@Y+[$c{wfpHbS.');
define('AUTH_SALT',        'S~jLF-mO|<CWaWQCVz@4/WP`$`Y,7|,V$|*@u4]xWYUe8v|OO$z}7JtC|k[gxEk.');
define('SECURE_AUTH_SALT', 'arl0upP-d36Vep|@b+0Hpbp6Z@*?FXx@%PCCuVv;tz-}Y$yph}eo -S0fvL. 3>)');
define('LOGGED_IN_SALT',   'Tq-qem$OA+:aCh3;FTKX5O*Mh&[:ZxELnM@MrT+5-P*5AKO|1=H-]ihli`{h>DQc');
define('NONCE_SALT',       'n_{zBvAin-}r?)WBI!>a{Nvvt_kF0Zw{@M#QOw95_YS 9AKr)X=:j2/rR^fS$D6D');

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
