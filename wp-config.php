<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'saddam' );

/** MySQL database username */
define( 'DB_USER', 'rakib' );

/** MySQL database password */
define( 'DB_PASSWORD', '5hFzEdT3g4l5hPge' );

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
define( 'AUTH_KEY',         '7wh`+/}YXr-;tH/x3~~IQ!;@K+K#Ha`VtXKFdH(S:.Y5wlv}wJ#|xg9):{c]Yp1/' );
define( 'SECURE_AUTH_KEY',  '+pJG67W.sLPy/m}/.fC_9gN[o1 )]CF2.9Zn>C-k(WYfyc$%IVlVYVZD%NJEjzn[' );
define( 'LOGGED_IN_KEY',    'L]idSNRv:-mRQk>L&__7?@8[stU}f%xk1C<miw^:J9cnTwZ=-5Pi`kGA})N d&6~' );
define( 'NONCE_KEY',        'o0-NS7bh(&~U_]LM8i_<t:IupcUF9Bm<qn|=fG6_Sdss__*a0(d,j@;Z&hi1Sd,u' );
define( 'AUTH_SALT',        'gPl8Bg|A|eaSsGh:]4.h/N!33|olzfrMe/sM28o0!0hg{/Kd/TFUfFzY.8%=Ol? ' );
define( 'SECURE_AUTH_SALT', '{GRPCuX`9X)&}@=P=URAj{1Y_6i*mV{f^qK[qj>+27#(0l|$Y)+hjNml(Qe4!n=n' );
define( 'LOGGED_IN_SALT',   'auSv^<]Y@Ej_hi}n$27mV/J~PWttIB-. /dj7=*2 oPshkiU;iz$5hnjmXQj}Q{2' );
define( 'NONCE_SALT',       '~]r~_o#`;26|C9ijRj)q[gOaJro02-7yXs6J ;XNga6bC-F>i3%C? i1 =f|mc.4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mh_';

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
