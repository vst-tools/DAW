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
define( 'DB_NAME', 'daw' );

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
define( 'AUTH_KEY',         'SmA YYEt(z6!9rY-XXktj;2H~d7uOSaR61p%rVk{ 0t1e*KhD@j_azoX$wMHn6.8' );
define( 'SECURE_AUTH_KEY',  '=eO._z[*49i;Nj~jR`pilQ*3n]}MLOOl+A#o!CCEsuptrF_nDA79jioxa>L?7Ds>' );
define( 'LOGGED_IN_KEY',    '1`)Ip>SvG*ja8L5G?3[<bSa1Aj_&IV7=X:Gdb}BG[=AYl2U.B|R^ysgYMhvY8S3C' );
define( 'NONCE_KEY',        '^?nH6XN9{q 1lI-Wg6w3s]seBX]k@ZHz3I9rywhN&71Ah gF:Cc<grKx!s:k/V!u' );
define( 'AUTH_SALT',        '5QuOJR2Np=r05VeZvb]@7:49/kn^HsdI?K>SO}+[[*#5m`c[VNt}7LEF>&nSvvQq' );
define( 'SECURE_AUTH_SALT', 'YmWbPln]5.vc+1)8TJ[^),uT~?@^p35!}[Yiw0^?2M=ttai)?,2;2eo8U.&Ht?ij' );
define( 'LOGGED_IN_SALT',   'pW]TtZRqq*:b-=AS*vbqrEAm>G8(XG73cm2}onb5c_@2LD-0M}v&ZQ2 *mxp}zB?' );
define( 'NONCE_SALT',       'b;}#rh)P+FHSj>>G$R>!{5W&r~!U:?<+k]L::6Tpq~TCEYY#bq,dUJ%UtVAH<_Yc' );

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
