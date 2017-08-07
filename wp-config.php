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
define('DB_NAME', 'finalproject');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'wAy?j{c z7QLS%TT^[Dq,Ux8qcL&|RKpk:0hVg478h6jwN]^Em)w;}N;oefN){%K');
define('SECURE_AUTH_KEY',  '8,ebJ?u#?h%Bc*P>;W^Sej9XY]f2N)l4XS&6Wo67&_}qHC.T*}m*cVz9]HAC^[D*');
define('LOGGED_IN_KEY',    'yJ(s@N;:x@y]d+L@]BjtbdDghh>$=M`P?3)c7XtlJudnuO2ZA pQ#s+RkJXGDdx%');
define('NONCE_KEY',        'g3Uj>Rq>o2qJp}G,X1@xCiVE%Yc{3{>9/0C2TQ!@.2DOt !rn+px.HUh<x:m@C_1');
define('AUTH_SALT',        'Sm8G`}4NT|<Q396Ks @vzV&`=3b!J.x:hG(Lb[=_4K+rL`ADMl~X}9)|u}2WH-@t');
define('SECURE_AUTH_SALT', 'dwPbf1F+WLB</3~TPV-hbYPasC^.ab:X_t@=P5^2?K}FB.sgk7C7-yw3>|!+N{^W');
define('LOGGED_IN_SALT',   'ElYx?7Kmt*ehyH(9`(e}bjq-TDR~f,IF{[g+KWVsS#akH0i5WH(-+66K1r(Kj3=W');
define('NONCE_SALT',       '1sX&1%gOXMRh5Y.[A?b?o3d#Lo/=cA%G,-Iit&+-,#nk0-/Yr+4QSJpSppS{q&3>');

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
define('WP_DEBUG', true);

define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
