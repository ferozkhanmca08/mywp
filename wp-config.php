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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'C!=s1:)F(;3anfY$qpToz[z5,Ko$|_RGfiGN U NpcF6=nZ2ox<^fT;NEUq{z!q`' );
define( 'SECURE_AUTH_KEY',  'MnfUD6+i1,j#bVk/Pk5Io!OWaf{-*sP> ,D6tn5Th_>!8gjzS`QM;EAZ|8hEsK;[' );
define( 'LOGGED_IN_KEY',    '0][x,9#)wpd;bWHA9e/0cKrC(f&PM1r5h]A@Nie)QEf8TZ.Y?B<1I$tG*8m{(Hk^' );
define( 'NONCE_KEY',        'nW0YjLxBfa<`J6/6/t^g#r?(!f3JT8hU(>~,JPuMTzC_!+wC2e<RU+XJ]cliE;Kb' );
define( 'AUTH_SALT',        'khk rq!LSc~O|bC9Y`,%D+Gie &<FFOX>j1nNpQzkXbK5WBf7I&USP)G>mES}SAs' );
define( 'SECURE_AUTH_SALT', '@<?]7G2wx[:ry$*oPr <0li slF~mfP1sw0}VNG+[MwA_at>9=:R,P+$;fDvQE8k' );
define( 'LOGGED_IN_SALT',   'FTx<$@lc8zK1bNv`4@ )6LLm-GsDH>dWrS6hFUm)VC;Y??{_^=ZmR~9< ENWrmu/' );
define( 'NONCE_SALT',       ',@*G3]EJFw{<udn`/I&dUn{5`U,xtj!MyR7$L`c(&e(Af9!#A<K@.6J[vfV%Oih8' );

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
