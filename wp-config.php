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
define( 'DB_NAME', 'customiser' );

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
define( 'AUTH_KEY',         ')sfgA3mg+Y0p/]2SW{PI$T;7=3WrSqta?o-zS$bO:}`cdyQuH0^7vGHr_ZCD%+ps' );
define( 'SECURE_AUTH_KEY',  'fm>v)`Deasl5n)Lq]|7Ku(TSm<~E6m>tx=^RK/Y-/QvDJ539hGyx$QrSUGla51.3' );
define( 'LOGGED_IN_KEY',    'msU&TN;m|6A`Kta,0w28a0u3W3H`2}9Cjz89I%&:0v]DbVm^28#`Gb&g0t!9K=1G' );
define( 'NONCE_KEY',        '|@)hI1R7ZvkH2I<1;,sX`(g,mI[=(i:3rpKG)}>4c~9/lc+TC[VeL#GgR|33!t|K' );
define( 'AUTH_SALT',        'C@GJO6y7HIHwFr~u^SA=^1sz4W_qqTV2jiZ)W%QS}h$hu8bIB;EHIGCu+h-nA3kO' );
define( 'SECURE_AUTH_SALT', '<u$7H^`vu#T>rb@N9,EUsHu(n_D@~B(Q!)iW@5;mJPI4zz$gs9Q;X;3Im;fq@#4S' );
define( 'LOGGED_IN_SALT',   'y:Jpq.xcA(lY!~*2qjbt`;u>EHU]?-P}&(k8z8aB{4*z_/wPhQ_1g<J-/ae>>?V!' );
define( 'NONCE_SALT',       'N0;]B^Jj#>JL6,9nF]EA,]SLCu/#=<!LUq*Z$RuAsMj4*dQ3T/8~{N$:wr}`6@<U' );

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
