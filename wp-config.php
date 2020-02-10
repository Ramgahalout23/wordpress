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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Yi=x8Ru}xoZdR>yXxx(>vps1%Xx*^,o0FP *mYSv];zUz,= fZ`:-epqlMT~R2tk' );
define( 'SECURE_AUTH_KEY',  '69BX8Hk?xWRSvv~(Tzs)eOOE^E%$q6)r-fKeq75hiZ|:DLg-vkc/k,;YO<5~nO~i' );
define( 'LOGGED_IN_KEY',    'r@@qAf@v/N!|dfm.pN!(U+c,H3uXACbX0YY#oc+`DVD?!03Sl2u0h5wd<HHPFp><' );
define( 'NONCE_KEY',        '7=C}aRlz=b($(Fm<#r!bp}li4?oo~U3iNUq-2JTD&`IE<>blK7k!(qN+v!x RalP' );
define( 'AUTH_SALT',        '6/c.I0SHyV:&xQ9@RZ}2?&)v;R2aU[1llAe|..}p4cstA?eqNUHOHqGW<8kokd8(' );
define( 'SECURE_AUTH_SALT', ')lS:EBU)1Y`7IBc[sQ_e_MJCMg tAd6AJ2%#$YCCCK>ina}.rcbP7C#ksA`{=Q}B' );
define( 'LOGGED_IN_SALT',   'S:b8c*R3i??f8i@=/ vU?b~P1$f-15=:-O][rI[,>SHdGR5<=zFB-thITsa?e~O^' );
define( 'NONCE_SALT',       '5;t;-f,fWqQc#TdkU+:%fml>n$B:f5;p-Zsw$8/#9s`fWt8Y)v#n)%Or.,T%-rh ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('WP_HTTP_BLOCK_EXTERNAL', false);
define('FS_METHOD', 'direct');