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
define( 'DB_NAME', 'wordpresslearn' );

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
define( 'AUTH_KEY',         'B[]%zT3#Qu7E7gKQpC7;FlGf4d6UBDu<8%H&7xmd=exHuM!g*42x~!yi0A-2fb%N' );
define( 'SECURE_AUTH_KEY',  'px)Ha-aR([,G.6v)iGL^Rofd}qGYL]fYLb..g|$;&P!7?YrMT6Fi]`on|;D{~*g7' );
define( 'LOGGED_IN_KEY',    '}|bnWdqPB221w3u-Ny(x 8Sjv>x+CEUZ$8wbGmi|JNfURG)4X19D,5_RO.aU]v#4' );
define( 'NONCE_KEY',        '-G[3gh~nZj7i->COR%p=K@G[%p.sMMl.x5`FiT&[KKTygpkWkhOPIXx`MilbxVnU' );
define( 'AUTH_SALT',        'Ees+G/%Wz/cnK,+;P r7Y3*YM,OIGgB+.!&>=$be#pE{Es#Rp3#~,z[vG9~eP8z;' );
define( 'SECURE_AUTH_SALT', 'v7_IR$$ j4&w}5Ca;Azegm9gZ9-6+[?0o9Z(-(!,,}FxV:O+L@B,8SxZ:},SdDDm' );
define( 'LOGGED_IN_SALT',   '`f5RiMi8OhsGrIA-4[.:+~M[KLVQHYrK687tez[-!vHXFq4ZiO`p6nKf[B_THvjZ' );
define( 'NONCE_SALT',       'I3B5+wyNZiTQNZh$2S7*]{iff06|@?CLFz4+jpY@,<:UH<`mgYtFBu+d~$OS:tiH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cp_';

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
