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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_testing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'mL~d#L,:SDId|@5kt6U.1E|BO+OpR]wJ5ewEr%U(cZG$T;@:XxcBC&lz7Aqo_O|k' );
define( 'SECURE_AUTH_KEY',  'd[P/wy6G8r7I}*W-8%%[wepHAR!T]%/%BOM3lxgc([{q<*.IlpEsrIi]sbc)rnW&' );
define( 'LOGGED_IN_KEY',    'kyYc5;d*OfgCUO%B<Tkc`PEOZwyoMG!d-&+ ^Hl`>)zde7MHD0`Zu7d*AV1Iv9,E' );
define( 'NONCE_KEY',        'dnf3M1H29w*>J1dIh]4/f@=b L3jYQOtEws!-]H.WcwZY,RZ(eLr$2?](s)L(BDK' );
define( 'AUTH_SALT',        'X t0x`Y,b*rX-hPL~OYxX9Q>-A6h9O=SS`n7Kr-mD5u2MB@h?:f1=iY+2a-9GX/:' );
define( 'SECURE_AUTH_SALT', '3br^+6m1JIAnDcAQB+oUqE] :/:6N4$-Fd:_*4tNNH<%Cr~F-sIrzE&A|w@n!tab' );
define( 'LOGGED_IN_SALT',   'oi.@$m7.8>g(orEiq}7fO~r 14ZUpdB$&,p$:auR?(CM^eF~2UrU/V@n:t$D9K.Z' );
define( 'NONCE_SALT',       '!x-zIg_klduFM`Kv_KH*X-H~9`u_.R!:7dAGh9{d69.XP5.KX#%-7phDLUq.;Nr(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
