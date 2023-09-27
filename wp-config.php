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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


define('AUTH_KEY',         'nAfhbyUGSxES0q39U125DqDcdOgJcY2SfhA9pXo5aRlFFyncK5ic6G5hxhcG2dWMfWrrsgSqroTOUzuygTyDdg==');
define('SECURE_AUTH_KEY',  'JDkXhqfin1nBFS/lzLsP3iRuVj+KTvJ+eTl+VH6XTctXsBXey4FVLDHpbbG2ROz8KOH68csUoyHvJZnXA4mk1Q==');
define('LOGGED_IN_KEY',    'lFfz7VNA7AXaiLURNwiTmYM7sPIJZk+ewEDRedxiy5fhAVxxuZgfHBsDkUdJnqweef6U1syavPPwPlrj5R1Wkg==');
define('NONCE_KEY',        'glJC7LKKwQRuPrmjZyEwyEidKNq9a6YsJlbcLi6kp3PjY7Ua7swhmMjYgVyIoJY5KBEIR9kbSni1sxTmWSJ/IA==');
define('AUTH_SALT',        'b5m7ZT2CL4yX3RdqCA3AJT47Lyw6gE4ZoKjxEo15AdyqJ4kMmYdqqADbCerBo13smbOtVoW7g80WF2Dkl79y7g==');
define('SECURE_AUTH_SALT', 'jTNSg1S7kB6kD+N8Wn4Igm2YHa4hsEregkeoB2GoNSiBibP6mJCK/lxli8Q7D+yO2Gp6ZwyqTmt53D6Umi3dBw==');
define('LOGGED_IN_SALT',   'M3VQ6NdRacokJqW6aF3HqFedKNfB02CSLWOTa3YWqjsbJqvEg25lQmbhS+lZY0v65Md0JgHz7ZfitJJYKjCM5A==');
define('NONCE_SALT',       'KpKfizwvZKGLa23JpqntXSWLJdrmgxvDvUfPeSvAFbWHoc69emrBM6/tLFPxKuApTkWRyNTWv9gp2pjzsMiglQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
