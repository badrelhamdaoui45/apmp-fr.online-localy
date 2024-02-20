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
define( 'DB_NAME', 'apmp-fr.online-localy' );

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
define( 'AUTH_KEY',         '!vn%i?2AUY;ua9<6 X^7J*t^Pqv TQ[E^xpS_=eG-^UM#]= }O!a%Kem/|Z$DQ@|' );
define( 'SECURE_AUTH_KEY',  '`^E`.UZVfIi=J@Yn+BE+eD9A)h_6GlAf:$@^#?^h|=4az4#s-&+$dlRdF:MF|{Q_' );
define( 'LOGGED_IN_KEY',    'z.YcOz2<nANsy:Y^Ql:ZPL:F0bwuBh@6i$:@q%2ov?&?<aq1QN<lAH]/YmEmX&[]' );
define( 'NONCE_KEY',        'VJ@F r1eVe?n575k@f8Xz>b%!.Rt|n%L^h3ztiY+7QYQ<}CowRLu|[)o>P:0W@_n' );
define( 'AUTH_SALT',        'VB@DfL_Jnj)VA,>_|gl#>DNnT_0xmD.HG.yR*oZ #u0d:y]krL[76z]$It^>`YYp' );
define( 'SECURE_AUTH_SALT', '!R.S^)DHER[FGR0+bt^?;kd2>ivUYGue20YLQ~gd@?LGY5UFK/2u?jo]!vs^WOQa' );
define( 'LOGGED_IN_SALT',   '%v9*0spguFY,wfDzyt4Z[w^Ffk$R3ji*L7+Og]ED3GaT`zD3bw,U`5n_ -p1tH^h' );
define( 'NONCE_SALT',       'x*MMJY5F48A;=.Oni#k7Xjn)14+Eu:L*yES^4F<p{1Gx+p2=+MfX^$:?zquRE-;P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
