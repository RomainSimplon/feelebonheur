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
define( 'DB_NAME', 'feelebonheur' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'M}r=$Ou9i`fSokk5Xf;DZOic]H3TNWf8p3F_h<J?_IdmmJ,E?*q~R!}KXq>lt`8t' );
define( 'SECURE_AUTH_KEY',  'B|eLrWS&`N*IyRe>#(,#jm+:adMAhM)&VxI2:vlss!c8unk[{cmj_R3~X&1L=_.:' );
define( 'LOGGED_IN_KEY',    '#VOZ]s(:z6vjvS-`eyIDlv21)lw6=-w$Yx-aT*jq&]Zj|Cx}UIpZvksox_j<Z)&2' );
define( 'NONCE_KEY',        ';~Uc]:_c1<~B+L[Y/],/%o_jE);{r$pWN#hr+Rk^=zWIc?TP_;QKwA8$w~p{;d0L' );
define( 'AUTH_SALT',        '@^*e7Xkue?51M%(cd->m_PxMf|Va->vzV%+NKr5hS;Tc4ARKa%T=2Z/&+wUa,xWO' );
define( 'SECURE_AUTH_SALT', '9H_8k<c+e&PJ8$G~5i2t`L>~39v@u-_~d6L,xX4sq`|mFH;~Y<jn@PRG8lWv.b,o' );
define( 'LOGGED_IN_SALT',   'n4pd~`0lJ4p$>L;,kwSgY8)^}kw/Vxe jZTgROW`8 ,tOBigB3[ju WJXx6(8x)c' );
define( 'NONCE_SALT',       ' wr#<D-t)7CzC7OHBH#ndWU5$gcW|Fq@,o!_98zWp@n;/~pKnJM3-FJpX92HzV4M' );

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
