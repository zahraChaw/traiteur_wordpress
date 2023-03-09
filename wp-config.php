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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'traiteur_projet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+f<EIful7xjYqyAnk~pGwzsPd[2p[[tUw,qg>PAteY|O6lwC#QkX84klBW2XV+pd' );
define( 'SECURE_AUTH_KEY',  'lGQ*YP.vELcudbp_4;1e#Ktxyq;-0t<6A%XN>)0%#&)<__|3[`Zc*N`+-<6qt6rJ' );
define( 'LOGGED_IN_KEY',    'Pv0<3_>t0rR*XmFU]/82]uV|ZL0FmJpvj],pc)hoz^#Th5qc]o,h4%<c<4$uNeO+' );
define( 'NONCE_KEY',        '`@NY8 >sVQ=gDcQuEoqf~6]r4vyvr[c9}D*~Qz.`R=1Nm_3Cx25*+?,*kj67|n4k' );
define( 'AUTH_SALT',        '}PJv{4}G[{[#PK$4|-?;S*8)Z>2B`QA6c5Jm89O+nBKM,)adZARIYOBbFTp=<Kq>' );
define( 'SECURE_AUTH_SALT', 'q|@ITA=<CQRB2=SkHp~PTFD*U V;CO}NwiHUGN~F0gh(D+[>.K00U]]*jjT=J:}H' );
define( 'LOGGED_IN_SALT',   'wf+`c-NkCQ;0c($C)iL4&Esk`!/hu^ekcLefr7^|.epEugowoIzwyFVBk*u_$OH9' );
define( 'NONCE_SALT',       'NJ{u]dWT2d(O(m(Mcg9WIN{@BR.w&}PK{0;O[Zw}N#F+mhwA78/{cSYL,ZN0?.*(' );

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
