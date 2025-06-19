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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'E>I]v184UI >X.}vtx;fYt+/g}0)9Cx<Mfr/x01wiFGdZt rGf`>B3;)RbZqFxTN' );
define( 'SECURE_AUTH_KEY',   '!2Y/u@aEc8M#_wpFn*8%&4zK`QLWw5!Jhg|T7BA~r]s{<*fnW+wN6T|tnKI9@E@j' );
define( 'LOGGED_IN_KEY',     '3PE!/.Yh`N]9+$Ct-yB*p[mn;P!Yt9*&/u8Ftt%VUP)!9f$ o8Sd+Up@US)S^dqB' );
define( 'NONCE_KEY',         'u_mfCGD!pi:J(1XQNN.Q&dyvDfiu({19^}4+|xAY|qPrJ6+d71Q81CvF+(;Km;nQ' );
define( 'AUTH_SALT',         '&I~l8!+&qqq!<x&Kgs!7C>+y-RG.FC0tOD<HF?KKSp915nR2JExOavgj`I4CQ.Ac' );
define( 'SECURE_AUTH_SALT',  'k&ON(5`*li*S![DTlWAh!M5`<yBMA3,aOsTN;h0D[<(04l!0;2!:#6+-z8Ut2f:p' );
define( 'LOGGED_IN_SALT',    'J~DH1C$`d/us$y+]=P$e,LYY{-j+`}Qj>gGZ;ih:.:bFj.D_l9-{`?&m7X+}}zZ3' );
define( 'NONCE_SALT',        'XQzU@@pH3<{2Zffz3qbhr-:i_fSN2Ln%s4`8,tjS$t0ICc[f&:+M{E[RuJdhci+#' );
define( 'WP_CACHE_KEY_SALT', '}(38`EG1gO@Lb4EV*;K.2)U<^2u/li2z5a94niK!1sSk;;@|haKM1W^GN{WaYr,k' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
