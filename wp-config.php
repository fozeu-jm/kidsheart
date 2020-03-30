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
define( 'DB_NAME', 'heart' );

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
define( 'AUTH_KEY',         'YZb#1;`rT+;0RSBJQ~l:T<5ivNX(xt:wv`sv+zts=H%_[5MUdFpL#&obr~PG-YZT' );
define( 'SECURE_AUTH_KEY',  'a`V.Vm!2H ujvU]MhUsd*5Y1]+9hmT`4G}RJ/M<J0AW5<dnbo&)zeCS~hY3u>*@N' );
define( 'LOGGED_IN_KEY',    't*=2>s/}r)7(v)Y<`fmC0YoM}!w9g8j=Jd(vg%6;3D{HopQz:ncZjb2}*g_K<R$T' );
define( 'NONCE_KEY',        ' rrt9!G{onWPwcwv{?(3Ax;`Iw|xe&oc+kKh?O}}b~?tGpEY!bVz2Fq99VP<%lXM' );
define( 'AUTH_SALT',        'nHLZ#TWw^ybMzMyT):/ui-G aCw(&M]NqxN@z;EV).h8%#b=-:Mhk7g z|XZp=#x' );
define( 'SECURE_AUTH_SALT', 'vrETC#/.;u246:Vgm&{!~x%Lqs@)bWY<?~ALlVmm9Foh9[CrQ7T)bx;A a0I+d&m' );
define( 'LOGGED_IN_SALT',   '#<qKo$IICzWXITrVSJA-/#zZ*DOltsyBn ?B,SeU3IRQq.m?p{h|5+aHkS$*85d7' );
define( 'NONCE_SALT',       'ALE=OIi>7*JX?z?mu8z$9,%~;^g:5sU(J`w-6@m,vr}[JZVCo`H{c/T$Dh{gW93w' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
