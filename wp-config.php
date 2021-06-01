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
define( 'DB_NAME', 'moinstore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '.&+wB/C~q^#/f|!M;fn^rVS1MD>otxHOHziOnWi@_FMpl,+_(>-Z-Rp5.e~(77Y2' );
define( 'SECURE_AUTH_KEY',  '~},x3qzMpp.nQ6v1<X?d/s_DpnSNh5t-d9Jlaw8MZ(^s%9y*IGgNlI{5*FUJW_Hb' );
define( 'LOGGED_IN_KEY',    ';71dJVQ,&$mRxM/vo{ZH1z_c#dR[{o[EY}Ml|d)V>JlWS[-HBNLZ&;]hZqhFm]pr' );
define( 'NONCE_KEY',        'v[e:hoOPM-9]HO2.nT^>/8d!fy-SXRIeTgU_p8N`sk1JAf*-?n.HrOzD_tXDQDgE' );
define( 'AUTH_SALT',        '0%D<1lEB)g&h?s4rXPsDQ)H};Cv?KBnV5#Iqb_*#f_6`-3eJh>T-Lu70xF9g*eDN' );
define( 'SECURE_AUTH_SALT', 'biv%||gSb]?XY.@RQ75jGsYWOhm^qhS)p7-}>ROv6)ht}nf5H8sjCb PE;X3IMIX' );
define( 'LOGGED_IN_SALT',   'HO4L Xt,m&b}f1$[Y=8[JcG[_gPb%1X63~k[nU0Rf}IZY=1OaY!0m<:E%{`+d/9R' );
define( 'NONCE_SALT',       'I#-Ib,{R_(:$hk2]cLYq7N$7q9Z|(^T+{L`+Ic:P,M!a/0!476}7AIt40DhFhXqL' );

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
