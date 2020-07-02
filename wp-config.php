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
define( 'DB_NAME', 'gitpushpages_db' );

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
define( 'AUTH_KEY',         ';%wHG]#BO&II9~SFMUvh]=5|!p1>!j9n[TF ##vx1RA(/W*K.1mm5L?cu%w^[Z:$' );
define( 'SECURE_AUTH_KEY',  'DdueT8&@/kC<FtLV<Xxaf<}[h4?Fi@}O@d>4>!`UfD:zD6#iE&*FxhnTm$W<W(/9' );
define( 'LOGGED_IN_KEY',    'NAEd,g>N:4m?!GTpQKZqXd0f4P/C}CY2!,L]y|WlEhjR@K.6yt@8bmvnt<ix,5hR' );
define( 'NONCE_KEY',        '&YD@IA,zi>@%Su~t?aKP{3}2$5p5VbN1KEmIG}9f!l]!6Ta8`bUM}l?cM51 L~qE' );
define( 'AUTH_SALT',        '{rCo+Q+*^:4N[c`W!FiH>ZE`LY/#Alt8!#X:t^[088p0:5-*0NS8{I12;!Jp30.T' );
define( 'SECURE_AUTH_SALT', 'Qko5{,gga>iIY$cljg?&A|+7;-~Y8Wm$z1.8a?^.G/H4:hQ@ixtUZ_Yrma{,6e9(' );
define( 'LOGGED_IN_SALT',   'm#y@_y3:Qlou?5UBS6V?GRWdyHH99h{H(NP#5BY+qk;zX!.}W_YgIl yQAM4&L%l' );
define( 'NONCE_SALT',       '/`<wOc2-$XNTCsbE-SqpP-hd/EQ,Y^5XbH}yexEY*Zv{]`(ah<+vD&zJUNIddh[e' );

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
