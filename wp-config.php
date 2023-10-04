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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'qL^u^:-Ml|VfbqJho17e{+;SW!No_dA7eF$7`3R4O=.<L<#Ey&,=`k{;XDUXyj,[' );
define( 'SECURE_AUTH_KEY',  'BMfy:$:gI;t[Eg/?PS]os[e;/p/`4T#0.SZNQ#f=hOR7EBS^<p6gqr<d&X0=@3/H' );
define( 'LOGGED_IN_KEY',    'YsW2}{Y0alrrPj(aA81af&7#ILm3BAKULdN~/EhWOG.32BZ9CvjzHSg)0oF]rovI' );
define( 'NONCE_KEY',        'KVh|(K7|+sGxM&+-/)<nB#2&VO/=Lvolt9?S.8iL#smqC-~)r#E!=:c$xt]44<z$' );
define( 'AUTH_SALT',        'MtmOsDBoTB4Fy4$<IrHCj_u,($NVF{x6P)aLovYnv*:ExR{k[tW@Jz>rPmN^8}-<' );
define( 'SECURE_AUTH_SALT', '7}ZcR2<%/n+S>i)*~CgsF{Wj;FvbsAFd~{nj$}|#x=7~~!A927Q*C,r&j<RfB;BB' );
define( 'LOGGED_IN_SALT',   '5cg%L=dB= 9g.U8fp(/D !_#[7>>TEUw8y+}m6>%bDqQc;Nredu;SdhOj(=d6`v]' );
define( 'NONCE_SALT',       'a8Btz,z{nMRRZ%dvP!puVIC]qWG`0wivNpfAe|kybr/We1-HYR9_T*pq QK@befh' );

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
