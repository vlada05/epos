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
define( 'DB_NAME', 'epos3' );

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
define( 'AUTH_KEY',         '1GUxlK4@+8Tp95$5KEAjupJl#a^/>qFF|UWS>BC:au-jQ5>WhNl`U^%FfS?kBtRj' );
define( 'SECURE_AUTH_KEY',  'aW[rUcE8}%je@Ps&z}k{k:pj{7nckn_6`RMAO=7EH-J7jSU 8tcJS:FoyP?)sxJ%' );
define( 'LOGGED_IN_KEY',    'a0G/p)N$3L[7f7*D|gs+Ii-xx.][ts$5)f,C8E5|>M@I&!aZ$:PeIbC+Sw;*k5k[' );
define( 'NONCE_KEY',        'I;`CdRxlnZsd)WKm14dGQP?Bwx#uqwr[uJLTXlptnLB]:?k7@ml&uC8gd +Swsf~' );
define( 'AUTH_SALT',        '{G$v1zdN@t?jz6i=T,&d5ak:0IM60YY0qo5v7<C:{%t;YsgE<U@D45_G|CytlL)+' );
define( 'SECURE_AUTH_SALT', ':=`rF,Pvj){UlOC=Uk5#PYT6dW%@XWzA`m~)E0!.Kl;70Tc9SqjUU(Yfu4BYxs+|' );
define( 'LOGGED_IN_SALT',   '|cyC.VILg5>VTg/D1kAGbvRz+O9f9cbolv<*3?`>J|Q$TM6El_9Lra/93BBF-qb?' );
define( 'NONCE_SALT',       'he~o@E0ptlg*gts4]zD[Yb8/T+KM`PT&~{jW:4d@dl##uTX $>Rz<acpgA{Y)/ws' );

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
