<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u258740938_3WMeT' );

/** Database username */
define( 'DB_USER', 'u258740938_9Fuzh' );

/** Database password */
define( 'DB_PASSWORD', 'B4QbfrnsOe' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '}%K0E`/2C-|+^Z?yx_]:l5tWfxI<AmS/]ljE,itFDKKtMv*FT1{OwHO5/YiopS/K' );
define( 'SECURE_AUTH_KEY',   '^CEV(kPH_ WS@din2#hN:UD^Y.|Y_(,mq;L]0<x0t5Ab/_baD(d@T._@u#,lhv&r' );
define( 'LOGGED_IN_KEY',     '*P1&#7<pY<q.{Y_m};.~Te*HpHPR(7%h9&0KQH:i{nDi 3q)<A.=.JcW o1`5`4?' );
define( 'NONCE_KEY',         'DV>>|PAJ$&b r<~VpaLWm&TeXoNqY(=^dpl+>,HLx+]xT1=qmI^MB&>6e2%^D,U&' );
define( 'AUTH_SALT',         ',`EM^-2^+NE1+ySX61>^jgG~2h*o8Q6}CWCjN]NQH*1ZE-3-#k%;TW^C6^e0WS!l' );
define( 'SECURE_AUTH_SALT',  'n__b|K.u2@{bP^5vS2~>.F#%Na-3t[ans6wYE(ylYg!H3?S5~TN_m&p7mR.O:xj_' );
define( 'LOGGED_IN_SALT',    'FQUavZ}e7_!oTCb?)mi]NRT;|LXa@:`[?k2V ==^HgkP6Q(-2Q>EY9P+)3oa`0^Y' );
define( 'NONCE_SALT',        '>bVXU-,=q$Y&q0V|_V6;vRvFoNk1/G~KgziCa88Kn6E&[jJuteL%torl|r6A37E.' );
define( 'WP_CACHE_KEY_SALT', 'xMal,$,i)d.I/>tDwJ)A%@vu(C1(e9~]>*}bEu|>%qMUjChYe;u=!](Hc2{;YbUV' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
