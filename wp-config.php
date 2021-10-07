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
define( 'DB_NAME', 'krb_db' );

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
define( 'AUTH_KEY',         ')][=IQe.=i7_)^k=whq^=^ZrILM0=(pl(=_AysZys%*/Adt@Qs8E snBm$tS.:`T' );
define( 'SECURE_AUTH_KEY',  '{:7/%cH0WNxLX:#UrWx[8AP^4?/On&=I U=re;]Sc)md(^7]nLrV>Y|AMppMl?kR' );
define( 'LOGGED_IN_KEY',    'hV}e0RK8K|@bx9<$W7U&h|^?+J@_YzWF]YU|}m1Cl3aZ9]$.RGlyda2pBU6d){=Q' );
define( 'NONCE_KEY',        'KVu_FbTTDb2FAcksZ#kqR@%h;clw=~ Ls-J:.Lm>UDwQhWxS(7Hz}:k<dkZy6t%/' );
define( 'AUTH_SALT',        'dMo~HGB@YwkZk}(s<e>vuntY+BGYQVVO^@]V3@;SOo_?vcVrz(z:0s-;;LV MgVW' );
define( 'SECURE_AUTH_SALT', '/Z$^=z4WyLt`|{M-)]/6E~@#neRW1dYtR2FBJ1fJV NJWL*rrVTUl{d6B=NYZ:%k' );
define( 'LOGGED_IN_SALT',   'tzVC>4wtD]$RADdRffxQpcR|kN44-4Vg,m0,0uvRzvx/HfH,cW/i_(qgr5( O1Rl' );
define( 'NONCE_SALT',       ':OqEG:^=P;~W!#S<3@>~#+NN-qFri%|[42R{mkUJIsRuADE(ayd MCy3!{(NED=q' );

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
