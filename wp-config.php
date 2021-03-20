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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U.)M*<T$_?6BH;iNj{Q0a`;>+nVX-A]{3)Sq[&XV2?XBiZI+]6sYh+A.q:CL!c.z' );
define( 'SECURE_AUTH_KEY',  'Z*|0.K%1[![Uc.HN0G*vI-^0,Vu>^i<97u&p>Ku3%7 P_U(j0#tXb92i~*d[y}a}' );
define( 'LOGGED_IN_KEY',    '4~sffiRP:W? fi#e59[;[:A8]xos.eF_P>@.1r2ekR$chu67c5E19Gvk1}hW@o;9' );
define( 'NONCE_KEY',        '+-:X3;K9Ci(dFIMzoTkafN/59oFMWT:kEg}gmUKPrGL(+bk:0zv~2C<l=1a y{Q}' );
define( 'AUTH_SALT',        '&P([Z@zHAafC)lYM_N.$]{0vKTQK7-] /#SL:@IN)[`.egX~)2J{YY~FTWSf_^4h' );
define( 'SECURE_AUTH_SALT', 'Wjp~ef6TS`F7_:~128VNR^$MBnZ.rH<2JXb&Hh-`K*1q`m)W6q> *w:H2T HZIDh' );
define( 'LOGGED_IN_SALT',   'Dvy,:X2v$Weh$=heh2*E@ipre;UfDgW&h#7~P$v&ak,$?(u<nI?4C<3P`Iq4q]6(' );
define( 'NONCE_SALT',       'fD.{Cvcaprb~:35=h;+Yn!2b&0]}5v$/Il60pr90Zl2sc|t]Q81{>iUR+7{/*uVE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
