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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '050430' );

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
define( 'AUTH_KEY',         'Y6M`UE`j,)YaQtVL-RZh}-C~Ujxb1d*^:I<`+Eiz#Km%fs_,gkoh&3uUOS3gB3K2' );
define( 'SECURE_AUTH_KEY',  '=!+5a#DW<%GLv9z(Z:JZl1|?pD~X.Asup5V_G7OF/NC;VB3pwKjDRLZhA~x]7S+:' );
define( 'LOGGED_IN_KEY',    'zDi`}A;dsV4N&dT(>ZQ&zL:/85Sd+c-rV*<==l/x(s-1(-EDj>Tf<6QO]FKr>YXu' );
define( 'NONCE_KEY',        'pA[dF^MS;j^R8.ALWNjV3@6:aD7S~@oK-6HiuI/mkx~2|dfneRyieTA1JD0ulKDe' );
define( 'AUTH_SALT',        'T<kI2$<ysAFa$TSG}AAEZI1vE-t;#gJE;X>KWY&V)G~^)JnMEZCa=]TcOF Sw=3Z' );
define( 'SECURE_AUTH_SALT', ')=e(1zm14QV)}%.6t8%ZG3Uq) $9f!eo4!%w-_#A}9^Nj@N/HHQPmK}!Fatk^dYk' );
define( 'LOGGED_IN_SALT',   '`I6#d@t;UoR|H~WD53WFJ<P5!Oi4%*RZmnfu_xv}jy .+o!@!Rta+`9n:f;r49.o' );
define( 'NONCE_SALT',       '2LHN] hh]3dsHet4$5gCAp6%|eM?*K!]W& lK`Hp$o_*4/Ryp18HtrKhZ;>AmO:l' );

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
