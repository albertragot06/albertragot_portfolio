<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'albert_portfolio' );

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
define( 'AUTH_KEY',         '5E8tkT2#>=V=B8Ucq TRku{(UR~@nt|NT<+.CiQq5X?0RZ82~BNoqzHja[0{#o5F' );
define( 'SECURE_AUTH_KEY',  'r=9%c:(ue[)qna/Ct>B=-?<I:`-YM.hrE2<5}C;]cLRY5reTJV=gci@;;]hqp70}' );
define( 'LOGGED_IN_KEY',    'B@Xo.ov:|iOz;$I&0m4xW#GY&D+:n,0dcC@{0AVX7|4k}aI?Xym*Z=}x9?smDG8V' );
define( 'NONCE_KEY',        'F(}{2fA-pc_e 4,PloKr2<(nWCoKp!N7I;-A~*%NAAUEEi*m4*KX/8gzH@!sf$.k' );
define( 'AUTH_SALT',        'h4j6|: mPHo4rFTZ{#J0b6tXH0 wg&t)<mEdKN8aY1R=[p]yI?A>`TJBAd>#abP`' );
define( 'SECURE_AUTH_SALT', '/C$no)LM@>i5t=Ju(Uhpof}zKmF}kSdBn8tjVL=Tq;bT{s$NNdEah7IL<;B4JW[}' );
define( 'LOGGED_IN_SALT',   'hP|,?41(tS=0u(Tm/)J}LGOe!NlcR]J[Q@9:@+]Ahy7><=--Ypv}P@Qq$|Ytb{+X' );
define( 'NONCE_SALT',       'I(l&L%;;;ro>`XakNih~Ba)[^eR`*#v[]gN)g@oeu_@+*Pm[#Qn1W*D+!BHj2.~[' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
