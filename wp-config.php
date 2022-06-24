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
define( 'DB_NAME', 'amazing_college' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^M;Lr}IUS*)mWWur_^e_~n:ktPtxk2r Ni3OSCrxy#s~<;X7@R-U/kz0zg7B|~kl' );
define( 'SECURE_AUTH_KEY',  '8L8]ba2JygE:oIG5h%}S45V&]fnNBd5YbI:?kpe}_M$8=;YG/ 1p$5H wG*+h/)w' );
define( 'LOGGED_IN_KEY',    'T5 {r7#&4|.6]?fx7Gf/M3JA^>J[xJ!`]=oz?)`YN>J-61x,R|<3pXo6Z7.UoMQS' );
define( 'NONCE_KEY',        'uPH[#}LB-Ki;GeK@#h)c|1}n<`u+XEO&h|xo%Df9(w*!=bX 38- 9EroKa|9Fbbh' );
define( 'AUTH_SALT',        'D!ZvV[wPN!LKg[Ewzj=L+brmYaj)V2~Nff#@~3+{[J~w5e-n,K}E)i{`5Xj|S@)c' );
define( 'SECURE_AUTH_SALT', 'T=rE^)=2S#VBa$%Rf*03y%n9aNCUk[skhedm>v9CM$zrSQA-FrKMY4YI`8VkRpij' );
define( 'LOGGED_IN_SALT',   'cM35H-WKsZD]S<kCBB!2IbfbH,Nsyss<~qZe ^{IGz(JITL^2 hz!#*}%i#JE^*c' );
define( 'NONCE_SALT',       '^Y-[;r!1T_0BCZqhwk!Ko:_JeXa[OaBLR_(-QSO~O223jeuTBneYjVr#k7!>VCE6' );

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
