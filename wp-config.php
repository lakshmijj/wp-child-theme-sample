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
define( 'DB_NAME', 'sampleproject' );

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
define( 'AUTH_KEY',         'D{.?EG#p<$d5/o.M70M_^xu/5(q$Njdi&BMUZvxm?rtuizSTd(Rf)&&4 QTqBj>}' );
define( 'SECURE_AUTH_KEY',  '8li?WU`IE_a`R{tri7F,PU#<7zW^#$&Hr<5]sJ.)UIPbY[x28IdHy-_zi,7oJ|qB' );
define( 'LOGGED_IN_KEY',    ')zTHs.$6$m]^8sk3N&94nXEsI}CDhb m&@wl)=hY#3W(@)YB_-$RvE3Z#q<uQN,X' );
define( 'NONCE_KEY',        '^}&ATkjn3e:9:s6{T>w2|=@O-K&RZEDIpz+67$Ay<#`$]*aa+UexK:o$AwQSb*S3' );
define( 'AUTH_SALT',        'Sv;K[pR4[{cX(&s#5*sOB,qH(LtvL |8rI)sj|<JPn1!b,:PFP-&c.<CC=o}mmr,' );
define( 'SECURE_AUTH_SALT', '!h+o=9qj*Nzb3A.#)F1amH%#OrXRJ5`V,?-d127J.DjL&JZT@O%f7)V~wJ5ypk/t' );
define( 'LOGGED_IN_SALT',   'xQ,14,Ab[Jj`N8)^1{A  ZB@_{nNnn_#<yprDMtD6tRt]?npS.N:;d9F/uB-m$Z2' );
define( 'NONCE_SALT',       '-Fmubt.,IpnATI_ZG3;uM@i1>*;-/17@h@&*ak)W(U:&U64^ AO;dadk*~n`NZrD' );

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

error_reporting(0); @ini_set('display_errors', 0);
