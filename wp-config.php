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
define( 'DB_NAME', 'word_x' );

/** MySQL database username */
define( 'DB_USER', 'joya' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LvXXeuUUzI221uIq' );

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
define( 'AUTH_KEY',         'unKGgYvsoy@B%kGoO*qDi%x}]-MbGS gi}7DAk1g;JevCP]cQ`.uN[8*0~#<_rM7' );
define( 'SECURE_AUTH_KEY',  'lPTKKbI+N;:,!{Ti^P<qZs3w:wD4nMRiS.}f*xp<@/97:W~Yr*d1*e>H3-eW2jna' );
define( 'LOGGED_IN_KEY',    '&}YEg0?Z>iltVGV=gOXV`EXDqkzQn]7?_Um:l`P]Qb*~vZBToW@=@4=mJLT,r:PE' );
define( 'NONCE_KEY',        'o@>$A2PGMy)bOw[2a~=J YJF8q?D7H?oJ@(()nm|DSIcRl8W>ff$@[|V^(.)@O@]' );
define( 'AUTH_SALT',        '0JZ Sh%!G+`($dOe[v(xU>!IQl7VV?BpoTK+!mku,SaY(l%HE|)DQEJ]sN!.Ud(U' );
define( 'SECURE_AUTH_SALT', 'e(]vJYCGe/bW~?Lno77xYmhX1z.aS%X}alZ~xkIC6Pz3Y$1~>}>w>P9#o9;(-.uw' );
define( 'LOGGED_IN_SALT',   'Pfl?{3Yjw>HV*R7nrV}tLEI5iPdUu*ZGe{in1Gb~5}w/V`;o-K,{&Sfzks>_Jm2N' );
define( 'NONCE_SALT',       'j$]w%&C]!2jLZTs0Pc@ R!buRA:0$R#3cs2>}mkv-}l_C#Mx?0ADtE93[I?C=Y|Y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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
