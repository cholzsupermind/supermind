<?php

// AWS
define( 'AS3CF_SETTINGS', serialize( array(
    'provider' => 'aws',
    'access-key-id' => '',
    'secret-access-key' => '',
) ) );

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
define( 'DB_NAME', 'admin_wp' );

/** Database username */
define( 'DB_USER', 'admin_wp' );

/** Database password */
define( 'DB_PASSWORD', 'ox1ZpeEosT' );

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
define( 'AUTH_KEY',         '(:W]nc12FKgU:P-1%u0Rf3-c%VL,k}oJsa_U~8;VQx)/ KqdQZ#*_ ZeC?!b`NIN' );
define( 'SECURE_AUTH_KEY',  'OS^:U6z41+Tuer0# R}j$Fr|qlZ}LF~(t7~tyRgiGU@5`UTXc#VH3RS9ZgI=cR8?' );
define( 'LOGGED_IN_KEY',    '?@}t4}%]rdl,J8QDR}6!2oD6}%7@oF)s~>^U*#NVYoB8?U%46Ua/O[wwz(WODVGW' );
define( 'NONCE_KEY',        'n]=IK~Gxq)Ew9]F*y[;t8E)=ahkMUV`4VN|4_|KmE{JIBh%bV5h+ruiRzG<tkp5K' );
define( 'AUTH_SALT',        'ej>3$`0e|5dh0*n9;Z Oa6bU5rW>wcMy/5e[BI2 FVnz8dWLR.J}P?Mc;LX7p&Ci' );
define( 'SECURE_AUTH_SALT', '=%Pdt58q.T)/P5<O[g13*d39/#SlRU.e-,47p>#JfqCW?qncH|h`<>_Wbr F%l9h' );
define( 'LOGGED_IN_SALT',   'f5=mz@GXbqiQ1P>@0_Ig#w0M.xIBE$EK(X@A,z8vb,C7iJsahPiE;&1VYU!>0;Rs' );
define( 'NONCE_SALT',       'BW!#L&R-vDglr3!?R+&2CiK8|QYK_ao`<.(+/k013]?12xzhyX:<6|2tv[}UCG6S' );

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
