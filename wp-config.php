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
define( 'DB_NAME', 'wpstarter_db' );

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
define( 'AUTH_KEY',         'M.9dJ4q7?y9K0cpPx;i]AesRi^Jn[7dpV0cm[e7f|F|JLHnu>cdfg%U:bIzm&Lai' );
define( 'SECURE_AUTH_KEY',  '_]*3~%^~Lk/mP%rkeB&8l9=qvR]Td9zc*r ;(3+ YF2mRjM>%Cnx{S7m;<Y{?U `' );
define( 'LOGGED_IN_KEY',    'VD_aHn i`AP2as`aEL$,6>0%q=.8Ue3v(Dc3~Y/S?oPp=R~-GY)V$+B*mZz7=0<%' );
define( 'NONCE_KEY',        'vJJJ+Xk!j3U5=Z[i;@q1&d?iP&Ab%GIO^g/PV gwl[}UK0r9CpLF^maR[p<-])T4' );
define( 'AUTH_SALT',        '83rqs2TL{T|h@MS;_r7pnl1E,=IHzdqd^E@Em(jnln1/%8@7*=B]IbXu0#)E(]HX' );
define( 'SECURE_AUTH_SALT', '1b,~quiOML7m/06;3o8To2>1|*D=Rg};^EY5S:(cvT [~2R@o(`=942O~1PsZT4`' );
define( 'LOGGED_IN_SALT',   '{hW~d4u:i!;df s gEHftF@6:Y.R<m%ubelH12!=^w^qD,kmLLq}.YJyFe<kKL&W' );
define( 'NONCE_SALT',       '%yzJ>ZOj@{YyMOJx)<mQKZ7Mgz?)e2.#wA9s.B/S?gd#-`18PnzqIjGFueIAE ?P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ws_';

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
