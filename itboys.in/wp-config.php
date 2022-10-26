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
define( 'DB_NAME', 'itboysin' );

/** Database username */
define( 'DB_USER', 'itboysuser' );

/** Database password */
define( 'DB_PASSWORD', 'itboyspassword' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         'Katg>aOMw+guEQNnDr}$T+qPNTA8M!(G[5Xtt]78K&wMXAo.,Loeyv0ms>%`tL}D');
define('SECURE_AUTH_KEY',  '(hty]un-DScG4nfP&>D,=$V--D- 5;71-(cUrt)w*vSS}U|-kcTL$BHX%=U_U++Y');
define('LOGGED_IN_KEY',    '1;oNb&Cc7R%EwNf*FO-0Vr#,CPw:I4-CAI}9Sm0MlkahR6v=;WzUyU]Bd9B.&pya');
define('NONCE_KEY',        'krSI3veZb$I<DxSOJ0@)_G0q3=y<.nnhVaG%gG*+S7pIpa(f^ul2wy~8&|.m!2c9');
define('AUTH_SALT',        '54>Dd1D{2.O/h?`70Zp|iLAs^+xrM6KnO4E1NL[Vw~}uhg3<sYR]>W&DsN%+12|]');
define('SECURE_AUTH_SALT', 'us2:.a^x+uVG`_-fsgEf@_/8(g7+QfBokXjG}as YOp!D9_IZk|8|,wV-pi&:!?2');
define('LOGGED_IN_SALT',   '{i|@Xfq-[{t8R] +?%G?|@H7g,.2bYzoKQ-l~wc+m|C:,MAGIL=%!QOL#=?U<A~.');
define('NONCE_SALT',       '])4`w8e<E<|Mua}.`YCH.t7CceISI=}XKoz;gp/;|R+,!rT]49YMFPKW!`!<sa86');
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
