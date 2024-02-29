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
define( 'DB_NAME', 'techtheorem' );

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
define( 'AUTH_KEY',         'R~7ds/i,Y<[JHh@A!v2q2B3eM9AJl59bn43kM&0Y(G5D5ef7v@od@gsA/~Blkp]S' );
define( 'SECURE_AUTH_KEY',  ';|4F{w..~24!}D<nO<_ii4@7 4i^oGX@}?5|z%=asW1>|[H)q=VK%#Z-p4lMZ,^Q' );
define( 'LOGGED_IN_KEY',    'L`4D3ijW32<[Z!|dA`3/&3h,(bj8zU[`Jx(xl-Xon?p+c:eg-7hv1%egn*}TY]V(' );
define( 'NONCE_KEY',        '5eDfvK$y=M:~We7pxQBxd<{.Gb;)`?m6LN1~ddful:?TvTeSXFK^~#<,exIKT>sE' );
define( 'AUTH_SALT',        '~+J=cAy/4!3FvzSFwpVYRqZM+w,f_1V-mnqL-e)oCo-LUSe>/F3s_(e]Ef1hAygB' );
define( 'SECURE_AUTH_SALT', '}ou=&2Mytr=yJy?D[qCm?YAvpR_. sYSvc!9}%xNb@dbn$tH}W%4!HhN$xNIU0mY' );
define( 'LOGGED_IN_SALT',   'W<zz.6PfiEC=<i$f_?]WQpeYu}vlzz[R5D.(ee_#4Y}mN2a,|.H Yg&rE5AGy,S`' );
define( 'NONCE_SALT',       '7!avhoCJk`jT1w{S*a6(^ GP@QoPpB=/PtglzZF7ZWsHJ2V[,Uv4</CCo!p6KgeI' );

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
