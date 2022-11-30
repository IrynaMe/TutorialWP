<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TutorialWP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A.c4/Bu2)bljdNC/`u~TU<ftEv;LWm<~MP#(]x8N1b `P=gl@4TkjI$mjrcyck}f' );
define( 'SECURE_AUTH_KEY',  'nJ(W]H mk)R0/;Y(3]+5l]h!^`<:9c&Fl>C::yM:r3xzby`~T%qvup;KmtqZHfkk' );
define( 'LOGGED_IN_KEY',    'y0(1$TT{^hA~Ys]d:eiHs-Vo5G]F(Io,Pf]1gkXg?puBfHxFq_ dEtk`X/4zal=M' );
define( 'NONCE_KEY',        '*(O!<6JB7+ZV|b rLi=]}WM`kLz5uR4$&Oo.Z?GSw11X)a:Sc?ZqawYs-yZH{f1;' );
define( 'AUTH_SALT',        ')o^%I@n4??,iTl`O3}YEJkc0{hzAVLj!WD;pdb?w.ku%(q{6 k-D}ln#`m/9trd=' );
define( 'SECURE_AUTH_SALT', ';r~oIH@&O5T6O+|&Sa#. Z-dfgv$hJ$ p$Ei0@f}`ttNK0<wZ8e2S^|AW.g3S1ky' );
define( 'LOGGED_IN_SALT',   'lk]/tS^}e%Fuw+.{UC[IM76m.#mGLcQ;>*}0OwL6wl97maP.6qWg)aGPH%O-}@g.' );
define( 'NONCE_SALT',       'rCMuiI7T p1=hUk*&{1TV=5Qtyi8==Y77.xt@+0da,m5lW> eHBaqPnVFohxMmLv' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
