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
define( 'DB_NAME', 'bitnami_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bn_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '67d85313e3' );

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
define( 'AUTH_KEY',         'k<lv0-U4yeru#RCo+2*e-XAt<;$l=Zq ) r@m_3/*3C1fG~%<a$w~i3&dHVX%<Ko' );
define( 'SECURE_AUTH_KEY',  'Wxz,a)1k@M|PfaIhg@PHMCdz:tArvE[H<P%QBB`Og*zUY%tiJ%|Bq9jGgT`)BQQC' );
define( 'LOGGED_IN_KEY',    '!]K^z^C!s/--xu$+$RuDxM-TRas!T;#/K965c;HKi7Qvs%(J(sFjZB*o:ld3EfT+' );
define( 'NONCE_KEY',        'Bfj}ru0$86pzHshQF$qQXic<z*,4Vm(sIZ!wV[gv[dNGhb.cj|PU+ P[N$n?[%_-' );
define( 'AUTH_SALT',        'Dr&V`C36w2cYOQMpo4DE#m1+]h!WBzU:{C,jb2X!.[3$=zOZ;3sJ^G8l(u9,`(B[' );
define( 'SECURE_AUTH_SALT', 'O$J2iyEWA,5l;BotX5$2aEz2p-)HAA|Ci}`B=>HIbB/d(TmH%*EI<-fw0a^_Ok^V' );
define( 'LOGGED_IN_SALT',   '!c*QC?&.;ZH<Y9DaPEjbYtdJ>8@&/`<lGlgb>lTn4Vs=0dGzfiF}-O~=:>nkN1&8' );
define( 'NONCE_SALT',       'nIE.c%}~`|S/ 29P6{N`6&m4BdeUuR_cT:540>oQs_={Cav^2KnTq~Yy&+ZO~0]K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

#define('WP_SITEURL', 'https://www.kidpairing.com/');
#define('WP_HOME', 'https://www.kidpairing.com/');

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
