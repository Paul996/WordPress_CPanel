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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'paulliu_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'paulliu_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '!QO~bbp&^IIO' );

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
define( 'AUTH_KEY',         '4m<C1mU_5d~02z7(r_XDHei3rNnorJgNp9~}FJg2+(xB&nMTf*+wOv.x<?$73[Ai' );
define( 'SECURE_AUTH_KEY',  'kpS9_s~&R+IZrz_GHR^Sb>/_s-w! fXHJ/5lmo)3`&`K_.1xMXnUMni~Bj/xkvT*' );
define( 'LOGGED_IN_KEY',    ',lhgRxbIaZp51+wcnt#hy].nicjEU||*N=N8|}zzl;T.}.uEl5%XcX]}ZDB<FQ5`' );
define( 'NONCE_KEY',        '-cK;1!|Q%)C2e4(_k0rQHKlNA,zeNZ:#6;wWx&5R[SqyPEQ^]jcYJl=4,pf[FVQ2' );
define( 'AUTH_SALT',        'A-(nLANd)!` =8E~|bF7kjX9$,~.[-<4t ,yxu1}~~1WHXvuOuSG=9Zx7Uq}-Kx7' );
define( 'SECURE_AUTH_SALT', '{ 3i.)HG9~|}0f8k$H4P|Gt&,I?KsqD}p.O)de=B8s9l{T]BpE8XOdQa[Q+Q<C~Q' );
define( 'LOGGED_IN_SALT',   '3DN8u]3KdWBBu4pgL]f,vD_.mn$sJRs[* Ha:F:Pr2%}*xh?pO}0b8C1[2ItGB$)' );
define( 'NONCE_SALT',       '0M6;KU[|]PjAE]p DN3NOexp1IOUgQ%j#@T[pMxG+YGACF0Kk+Stk={u8]Q^PQI{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ie_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
