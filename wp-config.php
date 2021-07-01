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
define( 'DB_NAME', 'onepagewebsite' );

/** MySQL database username */
define( 'DB_USER', 'shakil' );

/** MySQL database password */
define( 'DB_PASSWORD', 'O22CnEohi7LPwJ.b' );

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
define( 'AUTH_KEY',         'y%&.q?!Mw.e^-<((<~ 8VxC+mB,2jR,^7Pnd~s>zA&4C{,HZ:?>Y,@b?v?.ay37`' );
define( 'SECURE_AUTH_KEY',  '#iy]fSFyjO] 8Q%S#euoy:Y>z(>xc?qpqeE?A!ISe0)@qHULVaA/zY1rN%U{zI;P' );
define( 'LOGGED_IN_KEY',    '3*Tr4<%kz:o&@G SnifurlcI@>{E;$?nxh>kX]cQ T$2$Qv)+Qp8[Jz/M`vK>$*P' );
define( 'NONCE_KEY',        '{L3?lKobCQR?HuxUT.8H(=J8^ @85n0GfS;K?r&(5,]M-G/:SpdC.nZhnTbzAK|]' );
define( 'AUTH_SALT',        '/utxNe|&(t-*2kAH6^6WGQQeOLWyv}g,kBkh`f=*Z4D]&kQVP|[:`Oh =G2T@[3E' );
define( 'SECURE_AUTH_SALT', 'G~g@RYS}OhDqcyF_`es4mtIh9kclo_ScNa4v}?^cvC:DS:oQQ?p[._Xam-Pfm/j^' );
define( 'LOGGED_IN_SALT',   'WGpdb <Vuu&w>k~Qwvz{C@x|ar!lBYWg/Li]f/@IyN*X5m8U.6F-uKy]jE,hJcuv' );
define( 'NONCE_SALT',       'Hk/R`(>#QNrOw6D|DG5ei8#ly9RYV^ ~*;nk1_s%c+r49tU8L<,WhH@K{%fx>uxn' );

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
